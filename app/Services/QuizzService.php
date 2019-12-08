<?php

namespace App\Services;

use App\Events\QuizzEndEvent;
use App\Events\QuizzSongEndEvent;
use App\Events\QuizzSongStartEvent;
use App\Jobs\LaunchStartQuizzEvent;
use App\Models\Genre;
use App\Models\Quizz;
use App\Models\Track;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use \Fuse\Fuse;

class QuizzService {

    private $trackService;

    public function __construct() {
        $this->trackService = new TrackService();
    }

    /**
     * Cette fonction sert à faire avancer le quizz lorsque les clients en font la demande.
     * Selon le nombre de musique associés au quizz, on peut en déduire quelles actions doivent etre executés.
     * @param Quizz $quizz
     */
    public function launchNextQuizzAction(Quizz $quizz) {
        if (!$quizz->hasNoTracks()) {
            $track = $this->getLastQuizzTrack($quizz);
            event(new QuizzSongEndEvent($quizz->genre->id, $track));

            if ($quizz->hasReached10Tracks()) {
                $quizz->disable();
                $this->createQuizzWithGenreAndUsers($quizz->genre, $quizz->users);
                event(new QuizzEndEvent($quizz->genre->id));
            }
        }

        if (!$quizz->hasReached10Tracks()) {
            $track = $this->pickRandomTrackForQuizz($quizz);
            event(new QuizzSongStartEvent($quizz->genre->id, $track));
        }
    }

    /**
     * Tire au hasard une musique et l'ajoute aux musiques du quizz
     *
     * @param Quizz $quizz
     * @return Track
     */
    public function pickRandomTrackForQuizz(Quizz $quizz): Track {
        $track = $this->trackService->getRandomTrackByGenre($quizz->genre);
        $quizz->tracks()->attach($track->id);
        return $track;
    }

    public function addRandomMusicToQuizz($quizz) {
        $track = $this->musicService->getRandomMusicByGenreId(1, $quizz->genre_id)[0];
        $quizz->tracks()->attach($track['id']);
        return $track;
    }

    /**
     * Récupère un quiz en fonction d'un genre,
     * qu'il faille le créer ou le récupérer
     *
     * @param Genre $genre
     * @return Quizz
     */
    public function getOrCreateQuizzByGenre(Genre $genre): Quizz {
        $quizz = $this->getActiveQuizzByGenre($genre);

        if ($quizz == null) {
            $quizz = $this->createQuizzWithGenre($genre);
            LaunchStartQuizzEvent::dispatch($genre->id, 30000)->delay(Carbon::now()->addSecond());
        }
        return $quizz;
    }

    /**
     * Récupère le quiz en cours d'un genre
     *
     * @param Genre $genre
     * @return Quizz
     */
    public function getActiveQuizzByGenre(Genre $genre): ?Quizz {
        return Quizz::where('genre_id', $genre->id)->where('is_active', true)->first();
    }

    /**
     * Crée un quiz associé à un genre
     *
     * @param Genre $genre
     * @return Quizz
     */
    public function createQuizzWithGenre(Genre $genre): Quizz {
        $quizz = new Quizz();
        $quizz->genre()->associate($genre);
        $quizz->save();
        return $quizz;
    }

    /**
     * Crée un quiz associé à un genre avec une liste de participants par défaut
     * dans le cas où un nouveau quiz commence après la fin d'un autre
     *
     * @param Genre $genre
     * @param Collection $users
     * @return Quizz
     */
    public function createQuizzWithGenreAndUsers(Genre $genre, Collection $users): Quizz {
        $quizz = $this->createQuizzWithGenre($genre);
        $quizz->users()->sync($users->map(function ($user) {
            return $user->id;
        }));
        return $quizz;
    }

    /**
     *
     *
     * @param $user
     * @param Quizz $quizz
     * @return mixed
     */
    public function addOrRetrieveUserByQuizz($user, Quizz $quizz) {
        $quizzUser = DB::table('quizzes_users')
            ->where('user_id', '=', $user->id)
            ->where('quizz_id', '=', $quizz->id)
            ->first();
        if ($quizzUser == null) {
            $quizz->users()->attach((int)$user->id);
            $user['score'] = 0;
        } else {
            $user['score'] = $quizzUser->points;
        }
        return $user;
    }

    public function getLastQuizzTrack(Quizz $quizz): Track {
        return $quizz->tracks()->orderBy('created_at', 'desc')->first();
    }

    /**
     * Récupere un user présent dans un quizz
     * @param Quizz $quizz
     * @param User $user
     * @return User
     */
    public function getUserByQuizz(Quizz $quizz, User $user) {
        $user = DB::table('quizzes_users')
            ->where('user_id', (int)$user->id)
            ->where('quizz_id', (int)$quizz->id)
            ->get();
        return !empty($user[0]) ? $user[0] : null;
    }

    /**
     * Met à jour les points d'un user pour un quizz donné
     * @param Quizz $quizz
     * @param User $user
     * @param $points
     * @return Number
     */
    public function updateUserPoints(Quizz $quizz, User $user, $points) {
        $update = DB::table('quizzes_users')
            ->where('user_id', (int)$user->id)
            ->where('quizz_id', (int)$quizz->id)
            ->update(['points' => (int)$points]);
        return $update;
    }

    /**
     * Récupere un user présent dans un quizz et met à jour ses points
     * @param Quizz $quizz
     * @param User $user
     * @param $newPoints
     * @return Number
     */
    public function setAndGetUserPoints(Quizz $quizz, User $user, $newPoints) {
        $quizzUser = $this->getUserByQuizz($quizz, $user);
        $points = $newPoints + $quizzUser->points;
        $updated = $this->updateUserPoints($quizz, $user, $points);
        return !empty($updated) ? $points : 0;
    }

    /**
     * Retourne le titre de la track et le nom de l'artiste
     * @param $quizzId
     * @param $order
     * @return Track
     */
    public function getTrack($quizzId, $order) {
        $track = DB::table('quizzes')
            ->select('tracks.title', 'artists.name AS artist')
            ->where('quizzes.id', '=', (int)$quizzId)
            ->where('quizzes_tracks.order', '=', (int)$order)
            ->leftJoin('quizzes_tracks', 'quizzes_tracks.quizz_id', '=', 'quizzes.id')
            ->leftJoin('tracks', 'tracks.id', '=', 'quizzes_tracks.track_id')
            ->leftJoin('artists', 'artists.id', '=', 'tracks.artist_id')
            ->get();
        return !empty($track[0]) ? $track[0] : null;
    }

    /**
     * Retire les accents, les parentheses et les espaces d'une string. Retourne la string en lowerCase
     * @param $str
     * @return String
     */
    public function clearString($str) {
        $unwantedArray = ['Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y'];
        $str = strtr($str, $unwantedArray);
        return preg_replace("/\([^)]+\)/","", str_replace(' ', '', strtolower($str)));
    }

    /**
     * Trie une string alphabetiquement
     * @param $str
     * @return String
     */
    public function sortStringAlpha($str) {
        $split = explode(" ", $str);
        sort($split);
        return implode(" ", $split);
    }

    /**
     * Calcule le score d'un user en fonction d'une réponse donnée
     * @param Quizz $quizz
     * @param $body
     * @param User $user
     * @return Number
     */
    public function getResponseScore(Quizz $quizz, $body, User $user) {
        $track = $this->getTrack($quizz->id, $body['order']);
        if (empty($track)) return 0;

        $artistToFind = $this->clearString($track->artist);
        $titleToFind = $this->clearString($track->title);
        $input = $this->clearString((string)$body['input']);
        $artistPregMatch = preg_match("/$artistToFind/", $input);
        $titlePregMatch = preg_match("/$titleToFind/", $input);
        $points = 0;

        // si exact match sur artiste et titre on retourne 2 points
        if ( !empty($artistPregMatch) && !empty($titlePregMatch) ) {
            $points = 2;
            return $this->setAndGetUserPoints($quizz, $user, $points);
        }

        // si exact match sur artist ou titre 1 point est ajouté
        if ( !empty($artistPregMatch) || !empty($titlePregMatch) ) {
            $points = 1;
        }

        // TODO: A checker pour le point bonus j'aurai bien vu un demie point
        // on ajoute un point bonus si l'orthographe n'est pas bonne mais le resultat est proche
        $trackSorted = $this->clearString($this->sortStringAlpha(strtolower($track->title . ' ' . $track->artist)));
        $inputSorted = $this->clearString($this->sortStringAlpha(strtolower((string)$body['input'])));

        $track = new Fuse([
            [
                "track" => $trackSorted,
            ],
        ], [
            "keys" => [ "track" ],
            "includeScore" => true
        ]);
        $searchResponse = $track->search($inputSorted);

        if ($searchResponse[0]['score'] <= 0.2) {
            $points += 1;
        }

        return $this->setAndGetUserPoints($quizz, $user, $points);
    }

}
