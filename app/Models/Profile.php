<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
     /**
     * Get all of the post's comments.
     */
    public function addresses()
    {
        return $this->morphMany('App\Models\Addresses', 'addressable');
    }
}
