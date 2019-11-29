<?php

namespace App\Http\Controllers\Api;

use App\Events\QuizzStartedEvent;
use App\Models\Genre;
use App\Models\Quizz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizzController extends DingoController {
    public function __construct() {
        $this->table = 'quizzs';
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

        // récupérer des tracks random en fonction du genre id
        $tracks = [];
//        $tracks = DB::table('tracks')
//            ->leftJoin('artists', 'artists.id', '=', 'tracks.artist_id')
//            ->leftJoin('genres', 'genres.id', '=', 'artists.genre_id')
//            ->where('genres.id', '=', $quizz->genre_id)
//            ->get();

        event(new QuizzStartedEvent([
            'id' => $id,
            'tracks' => $tracks
        ]));

        return response()->json([
            'success' => true,
            'data' => [
                'tracks' => $tracks
            ]
        ]);
    }

}
