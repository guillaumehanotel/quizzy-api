<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $UserController = 'App\Http\Controllers\Api\UserController';
    $GenreController = 'App\Http\Controllers\Api\GenreController';

    $api->get('/tracks/random/{number}', 'App\Http\Controllers\Api\TrackController@getRandomTracks');
    $api->get('/genre/{id}/tracks/random/{number}', 'App\Http\Controllers\Api\TrackController@getRandomTracksByGenre');

    $api->group(['middleware' => 'api'], function ($api) use ($UserController, $GenreController){

        // TODOS: placer les routes quizz dans le middleware auth:api
        $api->post('/quizz/{id}','App\Http\Controllers\Api\QuizzController@findOrCreate');

        $api->post("register", 'App\Http\Controllers\Api\Auth\RegisterController@register');
        $api->post("login", 'App\Http\Controllers\Api\Auth\LoginController@login')->name('login');

        $api->get('/users/google/{google_uid}', $UserController . '@showByGoogleUid')->name('users.google.show');
        $api->post('/users', $UserController . '@store')->name('users.store');


        $api->get('genres', $GenreController . '@index')->name('genres.index');

        /*
        $api->get("register/{token}", 'App\Http\Controllers\Api\Auth\RegisterController@registerActivate');
        $api->post("password/email", 'App\Http\Controllers\Api\V1\Auth\PasswordResetController@createToken');
        $api->get("password/reset/{token}", 'App\Http\Controllers\Api\V1\Auth\PasswordResetController@findToken');
        $api->post("password/reset", 'App\Http\Controllers\Api\V1\Auth\PasswordResetController@reset');
        */
    });

    // Protected routes
    $api->group(['middleware' => 'auth:api'], function ($api) use ($UserController){

        $api->get('me', 'App\Http\Controllers\Api\UserController@me');
        $api->get('logout', 'App\Http\Controllers\Api\Auth\LoginController@logout');

        $api->get('/users', $UserController . '@index')->name('users.index');
        $api->get('/users/{id}', $UserController . '@show')->name('users.show');

    });

});

