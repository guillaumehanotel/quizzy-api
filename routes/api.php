<?php

<<<<<<< HEAD
=======
use Illuminate\Http\Request;

>>>>>>> develop
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

<<<<<<< HEAD
    $UserController = 'App\Http\Controllers\Api\UserController';

    $api->group(['middleware' => 'api'], function ($api) use ($UserController){
=======
//    $api->get('/',  function(){
//        event(new \App\Events\SuccessEvent([
//            'test' => 'helloTest'
//        ]));
//    });

    $api->get('/quizz/create','App\Http\Controllers\Api\QuizzController@create');
    $api->get('/quizz/{id}','App\Http\Controllers\Api\QuizzController@emitQuizzCreated');

    $UserController = 'App\Http\Controllers\Api\UserController';
    $GenreController = 'App\Http\Controllers\Api\GenreController';

    $api->group(['middleware' => 'api'], function ($api) use ($GenreController){

        // TODOS: placer les routes quizz dans le middleware auth:api
        $api->post('/quizz/create','App\Http\Controllers\Api\QuizzController@create');
        $api->post('/quizz/{id}/user/add','App\Http\Controllers\Api\QuizzController@addUserToQuizz');
        $api->get('/quizz/{id}','App\Http\Controllers\Api\QuizzController@get');
>>>>>>> develop

        $api->post("register", 'App\Http\Controllers\Api\Auth\RegisterController@register');
        $api->post("login", 'App\Http\Controllers\Api\Auth\LoginController@login')->name('login');

<<<<<<< HEAD
        $api->get('/users/google/{google_uid}', $UserController . '@showByGoogleUid')->name('users.google.show');
        $api->post('/users', $UserController . '@store')->name('users.store');

=======

        $api->get('genres', $GenreController . '@index')->name('genres.index');

>>>>>>> develop
        /*
        $api->get("register/{token}", 'App\Http\Controllers\Api\Auth\RegisterController@registerActivate');
        $api->post("password/email", 'App\Http\Controllers\Api\V1\Auth\PasswordResetController@createToken');
        $api->get("password/reset/{token}", 'App\Http\Controllers\Api\V1\Auth\PasswordResetController@findToken');
        $api->post("password/reset", 'App\Http\Controllers\Api\V1\Auth\PasswordResetController@reset');
        */
    });

    // Protected routes
<<<<<<< HEAD
    $api->group(['middleware' => 'auth:api'], function ($api) use ($UserController) {
=======
    $api->group(['middleware' => 'auth:api'], function ($api) use ($UserController){
>>>>>>> develop

        $api->get('me', 'App\Http\Controllers\Api\UserController@me');
        $api->get('logout', 'App\Http\Controllers\Api\Auth\LoginController@logout');

        $api->get('/users', $UserController . '@index')->name('users.index');
        $api->get('/users/{id}', $UserController . '@show')->name('users.show');

    });

});

