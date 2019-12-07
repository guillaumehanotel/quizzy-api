<?php

namespace App\Services;

use App\Events\QuizzEndEvent;
use App\Events\QuizzSongEndEvent;
use App\Events\QuizzSongStartEvent;
use App\Jobs\LaunchStartQuizzEvent;
use App\Models\Genre;
use App\Models\Quizz;
use App\Models\Track;
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

    public function getTrack($genreId, $order) {
        $track = DB::table('quizzs')
            ->select('tracks.title', 'artists.name AS artist')
            ->where('quizzs.genre_id', '=', $genreId)
            ->where('quizzs.is_active', '=', 1)
            ->where('quizzs_tracks.order', '=', $order)
            ->leftJoin('quizzs_tracks', 'quizzs_tracks.quizz_id', '=', 'quizzs.id')
            ->leftJoin('tracks', 'tracks.id', '=', 'quizzs_tracks.track_id')
            ->leftJoin('artists', 'artists.id', '=', 'tracks.artist_id')
            ->get();
        return $track[0];
    }

    public function clearString($str) {
        $unwantedArray = ['Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
            'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y'];
        $str = strtr($str, $unwantedArray);
        return preg_replace("/\([^)]+\)/","", str_replace(' ', '', strtolower($str)));
    }

    public function getResponseScore($genreId, $body) {
        $track = $this->getTrack($genreId, $body['order']);
        $artistToFind = $this->clearString($track->artist);
        $titleToFind = $this->clearString($track->title);
        $trackStr = $artistToFind . $titleToFind;
        $input = $this->clearString((string)$body['input']);

        $track = new Fuse([
            [
                "track" => $trackStr,
            ],
        ], [
            "keys" => [ "track" ],
            "includeScore" => true
        ]);

        $searchResponse = $track->search($input);
        $score = $searchResponse[0]['score'];
        $points = 0;

        // si artist ou titre trouvé en exact match -> 1 point
        if ( !empty(preg_match("/$artistToFind/", $input)) ||
            !empty(preg_match("/$titleToFind/", $input)) ) {
            $points = 1;
        }

        // si reponse exact 2 points
        if ($score === 0) {
            $points = 2;
        } elseif ($score <= 0.2) {
            $points = 1;
        }

        return $points;
    }

}
