<?php
namespace App\Services;

use App\Events\QuizzStartedEvent;
use App\Models\Genre;
use App\Models\Quizz;
use Illuminate\Support\Facades\DB;

class QuizzService {

    private $musicService;

    public function __construct(MusicService $musicService) {
        $this->musicService = $musicService;
    }

    public function addRandomMusicToQuizz($quizz) {
        $track = $this->musicService->getRandomMusicByGenreId(1, $quizz->genre_id)[0];
        $quizz->tracks()->attach($track['id']);
        return $track;
    }

    public function getOrCreateQuizz($genreId) {
        $quizz = DB::table('quizzs')
            ->where('genre_id', '=', $genreId)
            ->where('is_active', '=', 1)
            ->get();

        if (count($quizz) === 0) {
            $genre = Genre::findOrFail($genreId);
            $quizz = new Quizz();
            $quizz->genre()->associate($genre);
            $quizz->save();
            event(new QuizzStartedEvent([
                'id' => $quizz->id,
                'duration' => 30000
            ]));
        } else {
            $quizz = Quizz::find($quizz[0]->id);
        }

        return $quizz;
    }

    public function getOrCreateQuizzUsers($user, $quizz) {
        $quizzUsers = DB::table('quizzs_users')
            ->where('user_id', '=', $user->id)
            ->where('quizz_id', '=', $quizz->id)
            ->get();

        if (count($quizzUsers) === 0) {
            $quizz->users()->attach((int)$user->id);
            $user['score'] = 0;
        } else {
            $user['score'] = $quizzUsers[0]->points;
        }

        return $user;
    }

    public function getUser($genreId, $user) {
        $quizz = $this->getOrCreateQuizz($genreId);
        return $this->getOrCreateQuizzUsers($user, $quizz);
    }

}
