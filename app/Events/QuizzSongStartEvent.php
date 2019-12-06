<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class QuizzSongStartEvent implements ShouldBroadcast {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $track;
    public $genreId;

    public function __construct($genreId, $track) {
        $this->track = $track;
        $this->genreId = $genreId;
    }

    public function broadcastOn() {
        return new PresenceChannel('quizz-' . $this->genreId);
    }

    public function broadcastWith() {
        return [
            'track' => $this->track['preview_url'],
            'pauseDuration' => 10,
        ];
    }

}
