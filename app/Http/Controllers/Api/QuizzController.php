<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Transformers\UserTransformer;
use App\Models\Quizz;
use Dingo\Api\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class QuizzController extends Controller {

//    private function emitQuizzCreated($quizz) {
//        event(new \App\Events\SuccessEvent([
//            'id' => $quizz->id
//        ]));
//    }

    public function create() {
        try {
            $quizz = new Quizz();
            $quizz->save();

//            $this->emitQuizzCreated($quizz);

            return response()->json([
                'success' => true,
                'quizz' => $quizz
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e
            ]);
        }
    }

    public function emitQuizzCreated($id) {
        return event(new \App\Events\QuizzCreatedEvent([
            'id' => $id
        ]));
    }

}
