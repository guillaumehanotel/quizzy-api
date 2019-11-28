<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizz extends Model {

    public function users() {
        return $this->belongsToMany('App\Models\User', 'quizzs_users');
    }

    public function tracks() {
        return $this->belongsToMany('App\Models\Track', 'quizzs_users');
    }

    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }
}
