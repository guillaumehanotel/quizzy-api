<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzsTable extends Migration {

    public function up() {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('genre_id');
            $table->boolean('is_active')->default(1);
            $table->boolean('is_listening')->default(1);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('quizzes');
    }
}
