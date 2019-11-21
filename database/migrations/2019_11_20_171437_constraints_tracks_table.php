<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConstraintsTracksTable extends Migration {

    public function up() {
        Schema::table('tracks', function (Blueprint $table) {
            $table
                ->foreign('artist_id')
                ->references('id')
                ->on('artists')
                // quand on delete l'artiste, on delete les tracks associés
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    public function down() {
        Schema::table('tracks', function (Blueprint $table) {
            $table->dropForeign(['artist_id']);
        });
    }
}
