<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Track
 * @package App\Models
 * @property Artist artist
 * @property string title
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

    protected $appends = ['full_title'];

    public function quizzs() {
        return $this->belongsToMany('App\Models\Quizz')->withTimestamps();
    }

    public function artist() {
        return $this->belongsTo('App\Models\Artist');
    }

    public function getFullTitleAttribute() {
        return $this->artist->name . " " . $this->title;
    }

}
