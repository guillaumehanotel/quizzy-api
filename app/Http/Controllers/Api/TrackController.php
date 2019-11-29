<?php

namespace App\Http\Controllers\Api;

use App\Http\Transformers\TrackTransformer;
use App\Services\MusicService;

class TrackController extends DingoController {

    public function getRandomTracks($number) {
        $musicService = new MusicService();
        $tracks = $musicService->getRandomMusic($number);
        return $this->response->collection($tracks, new TrackTransformer());
    }

    public function getRandomTracksByGenre($genreId, $number) {
        $musicService = new MusicService();
        $tracks = $musicService->getRandomMusicByGenreId($number, $genreId);
        return $this->response->collection($tracks, new TrackTransformer());
    }

}
