<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzsTracksTable extends Migration {

    public function up() {
        Schema::create('quizzs_tracks', function (Blueprint $table) {
            $table->unsignedBigInteger('quizz_id');
            $table->unsignedBigInteger('track_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('quizzs_tracks');
    }
}
