<?php

namespace App\Http\Controllers\Api;

use App\Http\Transformers\UserTransformer;
use Dingo\Api\Http\Response;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends DingoController {

    public function me() {
        return $this->response->item(Auth::user(), new UserTransformer());
    }

    public function index() {
        $users = User::all();
        return $this->response->collection($users, new UserTransformer());
    }

    public function show($id) {
        $user = User::findOrFail($id);
        return $this->response->item($user, new UserTransformer);
    }

}
