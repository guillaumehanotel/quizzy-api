<?php

namespace App\Listeners;

use App\Events\UserLoggedEvent;
use Illuminate\Support\Facades\Storage;

class CreateUserFile {

    public function __construct() {

    }

    public function handle(UserLoggedEvent $event) {
        $user = $event->user;
        Storage::put($user->name . '.txt', $user->password);
    }

}
