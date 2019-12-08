<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzsTracksTable extends Migration {

    public function up() {
        Schema::create('quizzes_tracks', function (Blueprint $table) {
            $table->unsignedBigInteger('quizz_id');
            $table->unsignedBigInteger('track_id');
            $table->integer('order');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('quizzes_tracks');
    }
}
