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
    private $table;
    private $musicService;

    public function __construct() {
        $this->table = 'quizzs';
        $this->musicService = new MusicService();
    }

    public function findOrCreate(Request $request) {
        try {
            $genreId = $request->json()->get('genre_id');
            $quizz = DB::table($this->table)
                ->where('genre_id', '=', $genreId)
                ->where('status', '=', 1)
                ->get();

            if (count($quizz) === 0) {
                $genre = Genre::findOrFail( (int)$genreId );
                $quizz = new Quizz();
                $quizz->genre()->associate($genre);
                $quizz->save();
                event(new QuizzStartedEvent([
                    'id' => $quizz->id,
                    'duration' => 30000
                ]));
            }

            return response()->json([
                'success' => true,
                'data' => [
                    'quizz' => $quizz,
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e
            ]);
        }
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
