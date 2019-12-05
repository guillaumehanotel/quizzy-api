<?php

namespace App\Jobs;

use App\Events\QuizzStartedEvent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StartQuizz implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $genreId;
    protected $duration;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($genreId, $duration)
    {
        $this->genreId = $genreId;
        $this->duration = $duration;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        event(new QuizzStartedEvent([
            'id' => $this->genreId,
            'duration' => $this->duration
        ]));
    }
}
