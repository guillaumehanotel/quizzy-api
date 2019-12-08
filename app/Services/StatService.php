<?php
namespace App\Services;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StatService {
    private $table;

    public function __construct() {
        $this->table = 'quizzes_users';
    }

    public function getTotalGames($userId) {
        return DB::table($this->table)
            ->where('user_id', '=', $userId)
            ->get();
    }

    public function getWinGames($userId) {
        return DB::table($this->table)
            ->where('user_id', '=', $userId)
            ->where('winner', '=', 1)
            ->get();
    }

    public function getAverageAndBestScore($games) {
        $points = 0;
        $bestScore = 0;
        $totalGames = count($games);

        foreach ($games as $game) {
            $points += $game->points;

            if ($game->points > $bestScore) {
                $bestScore = $game->points;
            }
        }
        return [
            'bestScore' => $bestScore,
            'averageScore' => round($points / $totalGames),
            'totalGames' => $totalGames

        ];
    }

    public function getFavoriteCategory($userId) {
        $data = DB::table($this->table)
            ->select(DB::raw('count(*) as counter'), 'genres.id', 'genres.name')
            ->leftJoin('quizzes', 'quizzes.id', '=', $this->table . '.quizz_id')
            ->leftJoin('genres', 'genres.id', '=', 'quizzes.genre_id')
            ->where('user_id', '=', $userId)
            ->groupBy('genres.id', 'genres.name')
            ->get();

        $max = 0;
        $favoriteCategory = 0;
        foreach ($data as $d) {
            if ($d->counter > $max) {
                $max = $d->counter;
                $favoriteCategory = $d->id;
            }
        }
        return Genre::find($favoriteCategory);
    }

    public function getStatsByUser(User $user) {
        $games = $this->getTotalGames($user->id);
        $scores = $this->getAverageAndBestScore($games);
        $winGames = $this->getWinGames($user->id);
        return [
            'games' => $games,
            'totalGames' => (int)$scores['totalGames'],
            'winGames' => (int)count($winGames),
            'averageScore' => (int)$scores['averageScore'],
            'bestScore' => (int)$scores['bestScore'],
            'favoriteCategory' => $this->getFavoriteCategory($user->id)
        ];
    }
}
