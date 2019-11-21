<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintsQuizzsTracksTable extends Migration {

    public function up()
    {
        Schema::table('quizzs_tracks', function (Blueprint $table) {
            $table
                ->foreign('track_id')
                ->references('id')
                ->on('tracks')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('quizz_id')
                ->references('id')
                ->on('quizzs')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::table('quizzs_tracks', function (Blueprint $table) {
            $table->dropForeign(['track_id']);
        });
        Schema::table('quizzs_tracks', function (Blueprint $table) {
            $table->dropForeign(['quizz_id']);
        });
    }
}
