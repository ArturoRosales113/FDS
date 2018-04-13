<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
     /**
     * Get all of the post's comments.
     */
    public function addresses()
    {
        return $this->morphMany('App\Addresses', 'addressable');
    }
}
