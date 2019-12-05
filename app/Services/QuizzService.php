<?php
namespace App\Services;

use App\Jobs\StartQuizz;
use App\Models\Genre;
use App\Models\Quizz;
use Carbon\Carbon;
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
            StartQuizz::dispatch($genreId, 30000)->delay(Carbon::now()->addSecond());
        } else {
            $quizz = Quizz::find($quizz[0]->id);
        }

        return $quizz;
    }

    public function getOrCreateQuizzUser($user, $quizz) {
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
        return $this->getOrCreateQuizzUser($user, $quizz);
    }

}
