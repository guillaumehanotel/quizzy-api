<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Track
 * @package App\Models
 * @property Artist artist
 */
class Track extends Model {

    protected $fillable = [
        'id',
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

    public function artist() {
        return $this->belongsTo('App\Models\Artist');
    }

}
