<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish_pic extends Model
{
 	/**
     * Get the dish associated with the picture.
     */
    public function dish()
    {
        return $this->belongsTo('App\Models\Dish');
    }
}
