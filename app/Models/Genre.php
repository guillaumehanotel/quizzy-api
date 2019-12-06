<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Genre
 * @package App\Models
 * @property int id
 */
class Genre extends Model {

    protected $fillable = [
        'name',
        'picture_url'
    ];

    public function quizzs() {
        return $this->hasMany('App\Models\Quizz');
    }

    public function artists() {
        return $this->hasMany('App\Models\Artist');
    }

}
