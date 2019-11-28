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

class QuizzController extends DingoController {

    public function create(Request $request) {
        try {
            $genreData = $request->json()->get('genre');
            $genre = Genre::findOrFail( (int)$genreData['id'] );
            $quizz = new Quizz();
            $quizz->genre()->associate($genre);
            $quizz->save();

            return response()->json([
                'success' => true,
                'data' => [
                    'quizz' => $quizz,
                    'urlToShare' => '/quizz/' . $quizz->id
                ]
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e
            ]);
        }
    }

    public function get($id) {
        $quizz = Quizz::findOrFail($id);
        return response()->json([
            'success' => true,
            'data' => [
                'quizz' => $quizz,
                'users' => $quizz->users()
            ]
        ]);
    }

    public function addUserToQuizz(Request $request, $id) {
        try {
            $user = $request->json()->get('user');
            event(new QuizzUserJoinedEvent([
                'id' => $id,
                'user' => $user
            ]));

            $quizz = Quizz::findOrFail($id);
            $quizz->users()->attach((int)$user['id']);

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
