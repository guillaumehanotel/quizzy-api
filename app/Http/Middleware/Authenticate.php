<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware {

    /**
     * Determine if the user is logged in to any of the given guards.
     *
     * @param \Illuminate\Http\Request $request
     * @param array $guards
     * @return void
     *
     */
    protected function authenticate($request, array $guards) {
        try {
            parent::authenticate($request, $guards);
        } catch (AuthenticationException $e) {
            abort(401, 'Unauthorized action.');
        }
    }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param \Illuminate\Http\Request $request
     * @return string
     */
    protected function redirectTo($request) {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }
}
