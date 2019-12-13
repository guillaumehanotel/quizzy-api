<?php

namespace App\Http\Controllers\Api;

use App\Http\Transformers\GenreTransformer;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends DingoController {

    public function index(Request $request) {
        $genres = Genre::all();
        return $this->response->collection($genres, new GenreTransformer());
    }

    public function show(Genre $genre) {
        return $this->response->item($genre, new GenreTransformer());
    }

}
