<?php
use \App\Services\QuizzService;


Broadcast::channel('quizz-{id}', function ($user, $genreId) {
    $quizzService = new QuizzService();
    return $quizzService->getUser($genreId, $user);
});
