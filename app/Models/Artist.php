<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Artist
 * @package App\Models
 * @property string name
 * @property Collection|Track[] tracks
 */
class Artist extends Model {

    protected $fillable = [
        'name',
        'picture_url'
    ];

    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }

    public function tracks() {
        return $this->hasMany('App\Models\Track');
    }

    public function getPopularTracks() {
        return $this->tracks->unique(function (Track $track) {
            return $track->title;
        })->unique(function (Track $track) {
            return $track->duration;
        })->sortByDesc(function (Track $track) {
            return $track->youtube_view;
        })->take(3);
    }

    public function getRandomPopularTracks() {
        return $this->getPopularTracks()->shuffle();
    }

    public function getRandomPopularTrack() {
        return $this->getRandomPopularTracks()->first();
    }

}
