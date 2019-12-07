<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintsQuizzsTable extends Migration {

    public function up() {
        Schema::table('quizzes', function (Blueprint $table) {
            $table
                ->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    public function down() {
        if (Schema::hasTable('quizzes')) {
            Schema::table('quizzes', function (Blueprint $table) {
                $table->dropForeign(['genre_id']);
            });
        }
    }
}
