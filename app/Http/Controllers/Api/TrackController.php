<?php

namespace App\Http\Controllers\Api;

use App\Http\Transformers\TrackTransformer;
use App\Services\MusicService;

class TrackController extends DingoController {
    private $musicService;

    public function __construct() {
        $this->musicService = new MusicService();
    }

    public function getRandomTracks($number) {
        $tracks = $this->musicService->getRandomMusic($number);
        return $this->response->collection($tracks, new TrackTransformer());
    }

    public function getRandomTracksByGenre($genreId, $number) {
        $tracks = $this->musicService->getRandomMusicByGenreId($number, $genreId);
        return $this->response->collection(collect($tracks), new TrackTransformer());
    }

}
