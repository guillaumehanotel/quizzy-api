<?php
namespace App\Services;

use App\Events\QuizzStartedEvent;
use App\Models\Genre;
use App\Models\Quizz;
use Illuminate\Support\Facades\DB;

class QuizzService {

    public function getOrCreateQuizz($genreId) {
        $quizz = DB::table('quizzs')
            ->where('genre_id', '=', $genreId)
            ->where('status', '=', 1)
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
