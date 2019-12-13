<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Api\DingoController;
use App\Http\Transformers\UserTransformer;
use App\Models\User;
use Dingo\Api\Http\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class RegisterController extends DingoController {


    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ], [
            'name.required' => 'Un pseudo est requis',
            'name.string' => 'Le pseudo doit être une chaîne de caractère',
            'name.max' => 'Le pseudo est limité à 255 caractères',
            'email.required' => 'Un email est requis',
            'email.string' => 'L\'email doit être une chaîne de caractère',
            'email.email' => 'Le format de l\'email n\'est pas valide',
            'email.max' => 'L\'email est limité à 255 caractères',
            'email.unique' => 'Cet email est déjà utilisé',
            'password.required' => 'Un mot de passe est requis',
            'password.string' => 'Un mot de passe doit être une chaîne de caractère',
            'password.min' => 'Le mot de passe doit faire 8 caractères minimum',
        ]);
    }

    /**
     * @param array $data
     * @return $this|Model
     */
    protected function create(array $data) {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * We have to use the validator in this specific way to throw
     * the ValidationException so that Dingo is formatting the
     * error bag in a nice way and sends it back in the response
     *
     * @param Request $request
     * @return Response
     */
    public function register(Request $request) {
        $validator = $this->validator($request->all());
        $this->validateByValidator($request, $validator);

        $user = $this->create($request->all());
        $token = $user->createToken(Str::random(32))->accessToken;
        $meta = [
            'access_token' => $token,
            'token_type' => 'bearer'
        ];
        $response = $this->response->item($user, new UserTransformer())
            ->setStatusCode(201)
            ->setMeta($meta);
        return $response;
    }

}
