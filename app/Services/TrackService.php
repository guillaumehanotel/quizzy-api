<?php


namespace App\Services;


use App\Models\Artist;
use App\Models\Genre;
use App\Models\Track;

class TrackService {

    public function getRandomMusic($musicNumber) {
        $artists = Artist::all()->random($musicNumber);
        return $artists->map(function (Artist $artist) {
            return $artist->random_track;
        });
    }

    public function getRandomTrackByGenre(Genre $genre): Track {
        return $this->getRandomTracksByGenre(1, $genre)->first();
    }

    public function getRandomTracksByGenre($musicNumber, Genre $genre) {
        $artists = $this->getRandomArtistsByGenre($musicNumber, $genre);
        return $artists->map(function (Artist $artist) {
            return $artist->random_track;
        });
    }

    public function getRandomArtistsByGenre(int $number, Genre $genre) {
        return $genre->artists()->inRandomOrder()->limit($number)->get();
    }

}
