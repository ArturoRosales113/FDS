<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish_pics extends Model
{
 	/**
     * Get the dish associated with the picture.
     */
    public function dish()
    {
        return $this->hasOne('App\Models\Dish');
    }}