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

    public function getOrCreateQuizzByGenre(Genre $genre): Quizz {
        $quizz = $this->getActiveQuizzByGenre($genre);

        if ($quizz == null) {
            $quizz = $this->createQuizzWithGenre($genre);
            LaunchStartQuizzEvent::dispatch($genre->id, 30000)->delay(Carbon::now()->addSecond());
        }
        return $quizz;
    }

    public function getActiveQuizzByGenre(Genre $genre): Quizz {
        return Quizz::where('genre_id', $genre->id)->where('is_active', true)->first();
    }

    public function createQuizzWithGenre(Genre $genre): Quizz {
        $quizz = new Quizz();
        $quizz->genre()->associate($genre);
        $quizz->save();
        return $quizz;
    }

    public function createQuizzWithGenreAndUsers(Genre $genre, Collection $users): Quizz {
        $quizz = $this->createQuizzWithGenre($genre);
        $quizz->users()->sync($users->map(function ($user) {
            return $user->id;
        }));
        return $quizz;
    }

    public function addOrRetrieveUserByQuizz($user, Quizz $quizz) {
        $quizzUser = DB::table('quizzs_users')
            ->where('user_id', '=', $user->id)
            ->where('quizz_id', '=', $quizz->id)
            ->first();
        if ($quizzUser == null) {
            $quizz->users()->attach((int)$user->id);
        }
        $user['score'] = $quizzUser->points;
        return $user;
    }

    public function getLastQuizzTrack(Quizz $quizz): Track {
        return $quizz->tracks()->orderBy('created_at')->first();
    }

}
