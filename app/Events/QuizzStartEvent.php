<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class QuizzStartEvent implements ShouldBroadcast {
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $params = [];

    public function __construct($params) {
        $this->params = $params;
    }

    public function broadcastOn() {
        return new PresenceChannel('quizz-' . (int)$this->params['id']);
    }

    public function broadcastWith() {
        return [
            'duration' => $this->params['duration']
        ];
    }

}
