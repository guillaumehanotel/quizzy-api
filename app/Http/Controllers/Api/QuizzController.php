<?php

namespace App\Http\Controllers\Api;

use App\Events\QuizzRefreshEvent;
use App\Jobs\OpenQuizzListening;
use App\Models\Genre;
use App\Models\Quizz;
use App\Models\User;
use App\Services\QuizzService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizzController extends DingoController {

    private $quizzService;

    public function __construct(QuizzService $quizzService) {
        $this->quizzService = $quizzService;
    }

    public function askTrack(Genre $genre) {

        $quizz = $this->quizzService->getActiveQuizzByGenre($genre);

        if ($quizz === null) {
            return $this->response->errorNotFound("No quizz found");
        }

        if ($quizz->is_listening == true) {
            $quizz->closeListening();

            $this->quizzService->launchNextQuizzAction($quizz);

            OpenQuizzListening::dispatch($quizz)->delay(now()->addSecond());
            return $this->response->array([
                'success' => true,
                'message' => 'askTrack successfully processed'
            ]);

        } else {
            return $this->response->noContent();
        }
    }

    public function getQuizzData(Quizz $quizz) {
        $quizz['users'] = $quizz->users()->get();
        $quizz['tracks'] = $quizz->tracks()->get();

        return $this->response->array([
            'success' => true,
            'data' => [
                'quizz' => $quizz
            ]
        ]);
    }

    public function postUserResponse(Request $request, Genre $genre, User $user) {
        $body = $request->json()->all();
        $quizz = $this->quizzService->getActiveQuizzByGenre($genre);
        $response = $this->quizzService->getResponseScore($quizz, (array)$body, $user);

        event(new QuizzRefreshEvent($genre->id, $response));

        return $this->response->array([
            'success' => true,
            'data' => [
                'points' => $response['points'],
            ]
        ]);
    }

}
