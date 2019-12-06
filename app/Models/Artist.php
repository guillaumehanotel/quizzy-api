<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Artist
 * @package App\Models
 * @property string name
 */
class Artist extends Model {

    protected $fillable = [
        'name',
        'picture_url'
    ];

    public function tracks() {
        return $this->hasMany('App\Models\Track');
    }

    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }

}
