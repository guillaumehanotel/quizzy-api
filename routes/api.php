<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $UserController = 'App\Http\Controllers\Api\UserController';
    $GenreController = 'App\Http\Controllers\Api\GenreController';
    $QuizzController = 'App\Http\Controllers\Api\QuizzController';

    $api->group(['middleware' => 'api'], function ($api) use ($UserController, $GenreController, $QuizzController) {

        $api->post("register", 'App\Http\Controllers\Api\Auth\RegisterController@register');
        $api->post("login", 'App\Http\Controllers\Api\Auth\LoginController@login')->name('login');

        // TODO should be protected
        $api->get('/quizz/{quizz}', $QuizzController . '@getQuizzData');
        $api->get('/quizz/{genre}/askTrack', $QuizzController . '@askTrack');
        $api->post('/quizz/{genre}/user/{user}/song', $QuizzController . '@postUserResponse');

        $api->get('/users/google/{google_uid}', $UserController . '@showByGoogleUid')->name('users.google.show');
        $api->post('/users', $UserController . '@store')->name('users.store');
        $api->get('/users/{user}/stats', $UserController . '@getUserStats')->name('users.getStats');

        $api->get('genres', $GenreController . '@index')->name('genres.index');
        $api->get('genres/{genre}', $GenreController . '@show')->name('genres.show');

    });

    // Protected routes
    $api->group(['middleware' => 'auth:api'], function ($api) use ($UserController) {

        $api->get('me', 'App\Http\Controllers\Api\UserController@me');
        $api->get('logout', 'App\Http\Controllers\Api\Auth\LoginController@logout');

        $api->get('/users', $UserController . '@index')->name('users.index');
        $api->get('/users/{user}', $UserController . '@show')->name('users.show');
    });

});
