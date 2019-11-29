<?php


namespace App\Services;


use App\Models\Artist;
use App\Models\Genre;

class MusicService {

    public function getRandomMusic($musicNumber) {
        $tracks = [];
        $artists = Artist::all()->random($musicNumber);
        /** @var Artist $artist */
        foreach ($artists as $artist) {
            array_push($tracks, $artist->tracks()->inRandomOrder()->first());
        };
        return collect($tracks);
    }

    public function getRandomMusicByGenreId($musicNumber, $genreId) {
        $tracks = [];
        /** @var Genre $genre */
        $genre = Genre::find($genreId);
        $artists = $genre->artists()->inRandomOrder()->limit($musicNumber)->get();
        /** @var Artist $artist */
        foreach ($artists as $artist) {
            array_push($tracks, $artist->tracks()->inRandomOrder()->first());
        };
        return collect($tracks);
    }

}
