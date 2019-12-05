<?php
namespace App\Services;

use Illuminate\Support\Facades\DB;

class StatService {
    private $table;

    public function __construct() {
        $this->table = 'quizzs_users';
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

    public function getAverageScore($games, $totalGames) {
        $points = 0;
        foreach ($games as $game) {
            $points += $game->points;
        }
        return $points / $totalGames;
    }

    public function getStats($userId) {
        $games = $this->getTotalGames($userId);
        $totalGames = count($games);
        $wineGames = $this->getWinGames($userId);
        $stats = [
            'games' => $games,
            'totalGames' => (int)$totalGames,
            'winGames' => (int)count($wineGames),
            'averageScore' => (int)$this->getAverageScore($games, $totalGames)
        ];
        return $stats;
    }
}
