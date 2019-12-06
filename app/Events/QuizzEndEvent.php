<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class QuizzEndEvent {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $genreId;

    public function __construct($genreId) {
        $this->genreId = $genreId;
    }

    public function broadcastOn() {
        return new PresenceChannel('quizz-' . $this->genreId);
    }

    public function broadcastWith() {
        return [
            'duration' => 30
        ];
    }
}
