<?php

use App\Models\Genre;
use \App\Services\QuizzService;

Broadcast::channel('quizz-{id}', function ($user, $genreId) {
    $quizzService = new QuizzService();
    $genre = Genre::findOrFail($genreId);
    $quizz = $quizzService->getOrCreateQuizzByGenre($genre);
    $user = $quizzService->addOrRetrieveUserByQuizz($user, $quizz);
    return $user;
});
