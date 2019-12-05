<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Quizz
 * @package App\Models
 * @mixin \Eloquent
 */
class Quizz extends Model {

    public function users() {
        return $this->belongsToMany('App\Models\User', 'quizzs_users')
            ->withTimestamps()
            ->withPivot([
                'winner',
                'points'
            ]);
    }

    public function tracks() {
        return $this->belongsToMany('App\Models\Track', 'quizzs_tracks')
            ->withTimestamps();
    }

    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }
}
