<?php

namespace App\Http\Controllers\Api;

use App\Events\QuizzUserJoinedEvent;
use App\Http\Controllers\Controller;
use App\Http\Transformers\UserTransformer;
use App\Models\Genre;
use App\Models\Quizz;
use Dingo\Api\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use \App\Events\QuizzCreatedEvent;
use Illuminate\Support\Facades\DB;

class QuizzController extends DingoController {

    public function findOrCreate(Request $request, $id) {
        try {
            $genreId = $request->json()->get('genre_id');
            $quizz = DB::table('quizzs')
                ->where('id', '=', $id)
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

}
