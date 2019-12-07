<?php

namespace App\Libraries\MusicFetcher;

use App\Models\Artist;
use App\Models\Genre;
use App\Models\Track;
use GuzzleHttp\Client;
use Illuminate\Database\QueryException;

/**
 * Classe servant à récupérer les musiques fournis par l'API de Deezer pour les insérer en Base de données
 * Class DeezerFetcher
 * @package App\Libraries\MusicFetcher
 */
class DeezerFetcher {

    private $client;

    public function __construct() {
        $this->client = new Client();
    }

    private function getGenres() {
        $response = $this->client->request('GET', 'https://api.deezer.com/genre');
        $genres = json_decode($response->getBody());
        return $genres->data;
    }

    private function getArtistsByGenreId($genreId) {
        $response = $this->client->request('GET', "https://api.deezer.com/genre/" . $genreId . "/artists");
        $artists = json_decode($response->getBody());
        return $artists->data;
    }

    private function getTracksByArtistId($artistId) {
        $response = $this->client->request('GET', "https://api.deezer.com/artist/" . $artistId . "/top?limit=50");
        $artists = json_decode($response->getBody());
        return $artists->data;
    }

    public function fetchDeezerTracks() {

        $genres = $this->getGenres();
        array_shift($genres);

        foreach ($genres as $genre) {
            $dbGenre = Genre::firstOrNew([
                'name' => $genre->name
            ]);
            $dbGenre->picture_url = $genre->picture_medium;
            $dbGenre->save();

            foreach ($this->getArtistsByGenreId($genre->id) as $artist) {
                $dbArtist = Artist::firstOrNew([
                    'name' => $artist->name,
                ]);
                $dbArtist->picture_url = $artist->picture_medium;
                $dbArtist->genre_id = $dbGenre->id;
                $dbArtist->save();

                foreach ($this->getTracksByArtistId($artist->id) as $track) {
                    $track->title = trim(preg_split('/\([^)]*\)/', $track->title));
                    $dbTrack = Track::firstOrNew([
                        'title' => $track->title,
                        'album_title' => $track->album->title
                    ]);
                    $dbTrack->duration = $track->duration;
                    $dbTrack->rank = $track->rank;
                    $dbTrack->preview_url = $track->preview;
                    $dbTrack->album_cover_url = $track->album->cover_medium;
                    $dbTrack->artist_id = $dbArtist->id;
                    try {
                        $dbTrack->save();
                    } catch (QueryException $exception) {
                        dump($exception->getMessage());
                    }

                    // dump("[" . $genre->name . "] " . $artist->name . " - " . $track->title);
                }
            }
        }
    }

}
