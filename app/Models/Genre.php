<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model {

    protected $fillable = [
        'name',
        'picture_url'
    ];

    public function quizzs() {
        return $this->hasMany('App\Models\Quizz');
    }

}
