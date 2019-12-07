<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    public function run() {
        $this->call(GenresTableSeeder::class);
        $this->call(ArtistsTableSeeder::class);
        $this->call(TracksTableSeeder::class);
    }
}
