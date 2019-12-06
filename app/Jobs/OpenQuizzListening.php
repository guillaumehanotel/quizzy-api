<?php

namespace App\Jobs;

use App\Models\Quizz;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class OpenQuizzListening implements ShouldQueue {
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $quizz;

    public function __construct(Quizz $quizz) {
        $this->quizz = $quizz;
    }

    public function handle() {
        $this->quizz->openListening();
    }
}
