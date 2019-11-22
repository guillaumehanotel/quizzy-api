<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {

    $api->group(['middleware' => 'api'], function ($api) {

        // TODOS: placer les routes quizz dans le middleware auth:api
        $api->post('/quizz/create','App\Http\Controllers\Api\QuizzController@create');
        $api->post('/quizz/{id}/user/add','App\Http\Controllers\Api\QuizzController@addUserToQuizz');
        $api->get('/quizz/{id}','App\Http\Controllers\Api\QuizzController@get');

        $api->post("register", 'App\Http\Controllers\Api\Auth\RegisterController@register');
        $api->get("register/{token}", 'App\Http\Controllers\Api\Auth\RegisterController@registerActivate');
        $api->post("login", 'App\Http\Controllers\Api\Auth\LoginController@login')->name('login');

//        $api->post("password/email", 'App\Http\Controllers\Api\V1\Auth\PasswordResetController@createToken');
//        $api->get("password/reset/{token}", 'App\Http\Controllers\Api\V1\Auth\PasswordResetController@findToken');
//        $api->post("password/reset", 'App\Http\Controllers\Api\V1\Auth\PasswordResetController@reset');

    });

    // Protected routes
    $api->group(['middleware' => 'auth:api'], function ($api) {


        $api->get('me', 'App\Http\Controllers\Api\UserController@me');
        $api->get('logout', 'App\Http\Controllers\Api\Auth\LoginController@logout');

        $UserController = 'App\Http\Controllers\Api\UserController';
        $api->get('/users', $UserController . '@index')->name('users.index');
        $api->get('/users/{id}', $UserController . '@show')->name('users.show');

    });

});

