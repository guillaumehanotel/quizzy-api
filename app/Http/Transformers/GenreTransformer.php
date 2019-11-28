<?php

namespace App\Http\Transformers;

use App\Models\Genre;
use League\Fractal\TransformerAbstract;

class GenreTransformer extends TransformerAbstract {

    public function transform(Genre $genre) {
        return [
            'id' => (int)$genre->id,
            'name' => $genre->name,
            'picture_url' => $genre->picture_url,
        ];
    }

}
