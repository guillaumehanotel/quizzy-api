<?php

namespace App\Http\Transformers;

use App\Models\Track;
use League\Fractal\TransformerAbstract;

class TrackTransformer extends TransformerAbstract {

    public function transform(Track $track) {
        return [
            'id' => (int)$track->id,
            'title' => $track->title,
            'duration' => $track->duration,
            'preview_url' => $track->preview_url,
            'album_title' => $track->album_title,
            'album_cover_url' => $track->album_cover_url,
            'artist_name' => $track->artist->name,
            'genre_name' => $track->artist->genre->name,
        ];
    }


}
