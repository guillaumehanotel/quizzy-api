<?php

namespace App\Http\Controllers\Api;

use App\Events\QuizzStartedEvent;
use App\Http\Transformers\TrackTransformer;
use App\Models\Genre;
use App\Models\Quizz;
use App\Services\MusicService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Fractal;

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

    public function getTracks($id) {
        $quizz = Quizz::find($id);

        if ($quizz === null) {
            return response()->json([
                'success' => false,
                'message' => 'No quizz found'
            ]);
        }

        $tracks = $this->musicService->getRandomMusicByGenreId(1, $quizz->genre_id);

        event(new QuizzStartedEvent([
            'id' => $id,
            'tracks' => $tracks
        ]));

        return response()->json([
            'success' => true
        ]);
    }

}
