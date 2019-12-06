<?php

namespace App\Http\Controllers\Api;

use App\Events\QuizzEndEvent;
use App\Events\QuizzSongEndEvent;
use App\Events\QuizzSongInitEvent;
use App\Events\QuizzSongStartEvent;
use App\Jobs\OpenQuizzListening;
use App\Models\Quizz;
use App\Services\TrackService;
use App\Services\QuizzService;

class QuizzController extends DingoController {

    private $quizzService;

    public function __construct(QuizzService $quizzService) {
        $this->quizzService = $quizzService;
    }

    public function askTrack($genreId) {

        /** @var Quizz $quizz */
        $quizz = Quizz::where('genre_id', $genreId)
                      ->where('is_active', 1)
                      ->first();

        if ($quizz === null) {
            return $this->response->errorNotFound("No quizz found");
        }

        if ($quizz->is_listening == true) {
            $quizz->closeListening();

            $this->quizzService->launchNextQuizzAction($quizz);

            OpenQuizzListening::dispatch($quizz)->delay(now()->addSecond());
            return $this->response()->json([
                'success' => true,
                'message' => 'askTrack successfully processed'
            ]);

        } else {
            return $this->response->noContent();
        }
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

    public function postUserResponse($id) {
        $quizz = Quizz::findOrFail($id);

    }

}
