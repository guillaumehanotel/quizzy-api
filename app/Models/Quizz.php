<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class Quizz
 * @package App\Models
 * @property bool is_listening
 * @property bool is_active
 * @property Track[] tracks
 * @property User[]|Collection users
 * @property Genre genre
 * @mixin \Eloquent
 */
class Quizz extends Model {

    protected $table = 'quizzes';

    public function users() {
        return $this->belongsToMany('App\Models\User', 'quizzes_users')
            ->withTimestamps()
            ->withPivot([
                'winner',
                'points'
            ]);
    }

    public function tracks() {
        return $this->belongsToMany('App\Models\Track', 'quizzes_tracks')
            ->withTimestamps();
    }

    public function lastTrack() {
        return $this->tracks()->orderBy('quizzes_tracks.created_at', 'desc')->first();
    }

    public function genre() {
        return $this->belongsTo('App\Models\Genre');
    }

    public function closeListening() {
        $this->is_listening = false;
        $this->save();
    }

    public function openListening() {
        $this->is_listening = true;
        $this->save();
    }

    public function hasNoTracks() {
        return count($this->tracks) == 0;
    }

    public function hasReached10Tracks() {
        return count($this->tracks) == 10;
    }

    public function disable() {
        $this->is_active = false;
        $this->save();
    }

}
