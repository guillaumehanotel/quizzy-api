<?php

namespace App\Events;

use App\Models\Quizz;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class QuizzRefreshEvent implements ShouldBroadcast {
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $quizz;
    public $genreId;

    public function __construct($genreId, Quizz $quizz) {
        $this->genreId = $genreId;
        $this->quizz = $quizz;
    }

    public function broadcastOn() {
        return new PresenceChannel('quizz-' . (int)$this->genreId);
    }

    public function broadcastWith() {
        return $this->quizz;
    }

}
