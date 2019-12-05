<?php
use \App\Services\QuizzService;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('quizz-{id}', function ($user, $genreId) {
    $quizzService = new QuizzService();

    return [
        'user' => $quizzService->getUser($genreId, $user),
    ];
});
