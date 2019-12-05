<?php

namespace App\Http\Controllers\Api;

use App\Events\QuizzSongInitEvent;
use App\Events\QuizzStartedEvent;
use App\Models\Genre;
use App\Models\Quizz;
use App\Services\MusicService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizzController extends DingoController {
    private $musicService;

    public function __construct() {
        $this->musicService = new MusicService();
    }

    public function askTrack($id) {
        $quizz = Quizz::find($id);

        if ($quizz === null) {
            return response()->json([
                'success' => false,
                'message' => 'No quizz found'
            ]);
        }

        $tracks = $this->musicService->getRandomMusicByGenreId(1, $quizz->genre_id);
        $track = $tracks[0];
        $quizz->tracks()->attach($track['id']);

        event(new QuizzSongInitEvent([
            'id' => $id,
            'track' => $track
        ]));

        return response()->json([
            'success' => true
        ]);
    }

    public function getQuizzData($id) {
        $quizz = Quizz::findOrFail($id);
        $quizz['users'] = $quizz->users()->get();
        $quizz['tracks'] = $quizz->tracks()->get();

        return response()->json([
            'success' => true,
            'data' => [
                'quizz' => $quizz
            ]
        ]);
    }

}
