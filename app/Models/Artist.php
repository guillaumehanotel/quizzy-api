<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Artist
 * @package App\Models
 * @property string name
 * @property Track random_track
 */
class Artist extends Model {

    protected $fillable = [
        'name',
        'picture_url'
    ];

    protected $appends = ['random_track'];

    public function tracks() {
        return $this->hasMany('App\Models\Track');
    }

    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }

    public function getRandomTrackAttribute() {
        return $this->tracks()->inRandomOrder()->first();
    }

}
