<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration {

    public function up() {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('picture_url');
            $table->unsignedBigInteger('genre_id');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('artists');
    }
}
