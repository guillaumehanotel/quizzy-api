<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model {

    protected $fillable = [
        'title',
        'duration',
        'rank',
        'preview_url',
        'album_title',
        'album_cover_url',
        'artist_id'
    ];

    public function quizzs() {
        return $this->belongsToMany('App\Models\Quizz');
    }

}
