<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzsUsersTable extends Migration {

    public function up() {
        Schema::create('quizzes_users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('quizz_id');
            $table->boolean('winner')->default(false);
            $table->bigInteger('points')->default(0);
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('quizzes_users');
    }
}
