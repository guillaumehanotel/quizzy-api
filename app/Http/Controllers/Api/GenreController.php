<?php

namespace App\Http\Controllers\Api;

use App\Http\Transformers\GenreTransformer;
use App\Models\Genre;

class GenreController extends DingoController {

    public function index(Request $request) {
        $genres = Genre::all();
        return $this->response->collection($genres, new GenreTransformer());
    }

}
