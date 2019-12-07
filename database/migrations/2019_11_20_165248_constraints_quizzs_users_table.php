<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintsQuizzsUsersTable extends Migration {

    public function up() {
        Schema::table('quizzes_users', function (Blueprint $table) {
            $table
                ->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('quizz_id')
                ->references('id')
                ->on('quizzes')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    public function down() {
        if (Schema::hasTable('quizzes_users')) {
            Schema::table('quizzes_users', function (Blueprint $table) {
                $table->dropForeign(['user_id']);
            });
            Schema::table('quizzes_users', function (Blueprint $table) {
                $table->dropForeign(['quizz_id']);
            });
        }
    }
}
