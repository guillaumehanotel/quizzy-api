<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Genre
 * @package App\Models
 * @property int id
 * @property string name
 * @property Collection|Artist[] artists
 * @property Collection|Quizz[] quizzes
 */
class Genre extends Model {

    protected $fillable = [
        'name',
        'picture_url'
    ];

    public function quizzes() {
        return $this->hasMany('App\Models\Quizz');
    }

    public function artists() {
        return $this->hasMany('App\Models\Artist');
    }

}
