<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	/**
     * Get the category associated with the dish.
     */
    public function category()
    {
        return $this->hasMany('App\Models\Category');
    }}
