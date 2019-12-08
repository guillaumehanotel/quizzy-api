<?php

namespace App\Events;

use App\Models\Track;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;


class QuizzSongEndEvent implements ShouldBroadcast {
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $track;
    public $genreId;

    public function __construct($genreId, Track $track) {
        $this->track = $track;
        $this->genreId = $genreId;
    }

    public function broadcastOn() {
        return new PresenceChannel('quizz-' . (int)$this->genreId);
    }

    public function broadcastWith() {
        return [
            'artist' => $this->track->artist->name,
            'title' => $this->track->title,
        ];
    }

}
