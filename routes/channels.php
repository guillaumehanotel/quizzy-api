<?php
use \App\Services\QuizzService;

Broadcast::channel('quizz-{id}', function ($user, $genreId) {
    $quizzService = new QuizzService();
    $quizz = $quizzService->getOrCreateQuizzByGenre($genreId);
    $user = $quizzService->addOrRetrieveUserByQuizz($user, $quizz);
    return $user;
});
