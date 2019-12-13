<?php

namespace App\Jobs;

use App\Events\QuizzStartEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class LaunchStartQuizzEvent implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $genreId;
    protected $duration;

    public function __construct($genreId, $duration) {
        $this->genreId = $genreId;
        $this->duration = $duration;
    }

    public function handle() {
        event(new QuizzStartEvent([
            'id' => $this->genreId,
            'duration' => $this->duration
        ]));
    }
}
