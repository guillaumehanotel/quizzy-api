<?php

namespace App\Http\Controllers\Api;

use App\Http\Transformers\UserTransformer;
use App\Services\StatService;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class UserController extends DingoController {
    private $statService;

    public function __construct() {
        $this->statService = new StatService();
    }

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
            try {
                $token = $user->createToken(Str::random(32))->accessToken;
            } catch (\Exception $exception) {
                $this->response->errorInternal("No passport client tokens found");
            }
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
            'name' => $body['name'],
            'email' => $body['email'],
            'google_uid' => $body['googleId'],
            'lastname' => $body['lastname'],
            'firstname' => $body['firstname'],
            'avatar_url' => $body['avatarUrl'],
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

    public function getStats($id) {
        $stats = $this->statService->getStats($id);
        return response()->json([
            'success' => true,
            'data' => $stats
        ]);
    }

}
