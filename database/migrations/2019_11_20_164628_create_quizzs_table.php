<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzsTable extends Migration {

    public function up() {
        Schema::create('quizzs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('quizzs');
    }
}
