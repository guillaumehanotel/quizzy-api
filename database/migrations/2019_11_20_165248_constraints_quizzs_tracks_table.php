<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintsQuizzsTracksTable extends Migration {

    public function up() {
        Schema::table('quizzes_tracks', function (Blueprint $table) {
            $table
                ->foreign('track_id')
                ->references('id')
                ->on('tracks')
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
        if (Schema::hasTable('quizzes_tracks')) {
            Schema::table('quizzes_tracks', function (Blueprint $table) {
                $table->dropForeign(['track_id']);
            });
            Schema::table('quizzes_tracks', function (Blueprint $table) {
                $table->dropForeign(['quizz_id']);
            });
        }
    }
}
