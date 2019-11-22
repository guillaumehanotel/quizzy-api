<?php

namespace App\Http\Controllers\Api;

use App\Http\Transformers\UserTransformer;
use Dingo\Api\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Str;


class UserController extends DingoController {

    public function me() {
        return $this->response->item(Auth::user(), new UserTransformer());
    }

    public function index(Request $request) {
        $users = User::all();
        return $this->response->collection($users, new UserTransformer());
    }

    public function showByGoogleUid($googleUid) {
        $user = User::where('google_uid', '=', $googleUid)->first();
        if (empty($user)) {
            return $this->response->errorNotFound("No user with Google UID : " . $googleUid);
        } else {
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
    }

    public function show($id) {
        $user = User::findOrFail($id);
        return $this->response->item($user, new UserTransformer);
    }

    public function store(Request $request) {

        $body = $request->json()->all();
        $user = User::create([
            'name' => $body['username'],
            'email' => $body['email'],
            'google_uid' => $body['google_uid'],
            'lastname' => $body['lastname'],
            'firstname' => $body['firstname'],
            'avatar_url' => $body['avatar_url'],
            'password' => bcrypt(Str::random(16))
        ]);

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
