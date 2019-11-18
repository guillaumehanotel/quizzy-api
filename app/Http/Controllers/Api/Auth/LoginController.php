<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\DingoController;
use App\Http\Transformers\NullObjectTransformer;
use App\Http\Transformers\UserTransformer;
use App\Models\NullObject;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class LoginController extends DingoController {

    /**
     * Handle a login request to the application.
     *
     * @param Request $request
     * @return void
     * @throws ValidationException
     */
    public function login(Request $request) {
        $this->validateLogin($request);
        $this->attemptLogin($request);
    }

    /**
     * Validate the user login request.
     *
     * @param Request $request
     * @return void
     * @throws ValidationException
     */
    protected function validateLogin(Request $request) {
        $this->validate($request, [
            $this->username() => 'required|string|email',
            'password' => 'required|string',
        ]);
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param Request $request
     * @return void
     */
    protected function attemptLogin(Request $request) {
        if (Auth::attempt($this->credentials($request))) {
            $this->sendLoginResponse($request);
        } else {
            $this->sendFailedLoginResponse($request);
        }
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param Request $request
     * @return array
     */
    protected function credentials(Request $request) {
        return $request->only($this->username(), 'password');
    }

    /**
     * Send the response after the user was authenticated.
     * The logic uses personal access token created by Passport
     * in the background. Feel free to change it to your needs.
     *
     * @param Request $request
     * @return Response
     */
    protected function sendLoginResponse(Request $request) {
        $user = Auth::user();
        $token = $user->createToken(Str::random(32))->accessToken;
        $meta = [
            'access_token' => $token,
            'token_type' => 'bearer'
        ];
        $response = $this->response->item($user, new UserTransformer())
            ->setStatusCode(200)
            ->setMeta($meta);
        $response->throwResponse();
    }

    /**
     * The user has been authenticated.
     *
     * @param Request $request
     * @param mixed $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user) {

    }

    /**
     * Get the failed login response instance.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    protected function sendFailedLoginResponse(Request $request) {
        $this->response()
            ->errorUnauthorized("These credentials do not match our records.");
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username() {
        return 'email';
    }

    /**
     * Log the user out of the application.
     *
     * The logout procedure just deletes the personal access token
     * which was created by Passport. You can also just revoke them
     * or incorporate refresh tokens. Do as you like.
     *
     * @param Request $request
     * @return Response
     */
    public function logout(Request $request) {
        $request->user()->token()->revoke();
        $request->user()->token()->delete();
        $response = $this->response->noContent();
        $response->throwResponse();
    }


}
