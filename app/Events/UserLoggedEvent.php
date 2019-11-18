<?php


namespace App\Events;


use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;


class UserLoggedEvent implements ShouldBroadcast {
    use SerializesModels;

    public $user;

    public function __construct(User $user) {

        $this->user = $user;
    }

    /**
     * Get the channels the event should broadcast on.
     * @return Channel|Channel[]
     */
    public function broadcastOn() {
        return new Channel('room_01');
    }

}
