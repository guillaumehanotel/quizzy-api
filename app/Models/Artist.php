<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
