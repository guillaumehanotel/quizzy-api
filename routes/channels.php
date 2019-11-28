<?php
use \App\Models\Quizz;
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

Broadcast::channel('quizz-{id}', function ($user, $id) {
    $quizz = Quizz::find($id);
    if ($quizz === null) {
        return false;
    }



    return [
        'name' => $user->name
    ];
});
