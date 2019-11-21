<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model {

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }

    public function tracks() {
        return $this->belongsToMany('App\Models\Track');
    }
}
