<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTracksTable extends Migration {

    public function up() {
        Schema::create('tracks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('duration');
            $table->bigInteger('rank');
            $table->string('preview_url');
            $table->string('album_title');
            $table->string('album_cover_url');
            $table->unsignedBigInteger('artist_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('tracks');
    }
}
