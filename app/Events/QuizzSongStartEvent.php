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
    public $order;

    public function __construct($genreId, $track, $order) {
        $this->track = $track;
        $this->genreId = $genreId;
        $this->order = $order;
    }

    public function broadcastOn() {
        return new PresenceChannel('quizz-' . $this->genreId);
    }

    public function broadcastWith() {
        return [
            'order' => $this->order,
            'track' => $this->track['preview_url'],
            'pauseDuration' => 5,
        ];
    }

}
