<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DingoExceptionHandlerProvider extends ServiceProvider {

    public function boot() {
        $handler = app('Dingo\Api\Exception\Handler');
        $handler->register(function (AuthenticationException $exception) {
            throw new UnauthorizedHttpException(null, $exception->getMessage(), $exception);
        });
        $handler->register(function (AuthorizationException $exception) {
            throw new AccessDeniedHttpException($exception->getMessage(), $exception);
        });
    }

    public function register() {

    }

}
