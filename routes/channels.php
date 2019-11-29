<?php
use \App\Models\Quizz;
use \Illuminate\Support\Facades\DB;
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

    $quizzUsers = DB::table('quizzs_users')
        ->where('user_id', '=', $user->id)
        ->where('quizz_id', '=', $id)
        ->get();

    if (count($quizzUsers) === 0) {
        $quizz->users()->attach((int)$user->id);
    }

    $user['score'] = $quizzUsers[0];

    return [
        'user' => $user,
    ];
});
