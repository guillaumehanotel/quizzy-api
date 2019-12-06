<?php

namespace App\Services;

use App\Jobs\LaunchStartQuizzEvent;
use App\Models\Genre;
use App\Models\Quizz;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class QuizzService {

    private $musicService;

    public function __construct() {
        $this->musicService = new MusicService();
    }

    public function selectQuizzNewTrack($quizz) {
        $track = $this->musicService->getRandomMusicByGenreId(1, $quizz->genre_id)[0];
        $quizz->tracks()->attach($track['id']);
        return $track;
    }

    public function getOrCreateQuizzByGenre($genreId) {
        $quizz = Quizz::where('genre_id', $genreId)->where('is_active', true)->first();

        if ($quizz == null) {
            $quizz = $this->createQuizzWithGenre($genreId);
            LaunchStartQuizzEvent::dispatch($genreId, 30000)->delay(Carbon::now()->addSecond());
        }
        return $quizz;
    }

    public function createQuizzWithGenre($genreId): Quizz {
        $genre = Genre::findOrFail($genreId);
        $quizz = new Quizz();
        $quizz->genre()->associate($genre);
        $quizz->save();
        return $quizz;
    }

    public function createQuizzWithGenreAndUsers($genreId, Collection $users) {
        $quizz = $this->createQuizzWithGenre($genreId);
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

    public function getLastQuizzTrack(Quizz $quizz) {
        return $quizz->tracks()->orderBy('created_at')->first();
    }

}
