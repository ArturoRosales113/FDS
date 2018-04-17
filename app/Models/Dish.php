<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
	/**
     * Get the category associated with the dish.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    /**
     * Get the orders associated with the dish.
     */
    public function orders()
    {
		return $this->belongsToMany('App\Models\Orders', 'orders_dishes');
	}
    /**
     * Get the characteristics associated with the dish.
     */
    public function characteristics()
    {
        return $this->belongsToMany('App\Models\Characteristic', 'characteristics_dishes');
    }
    public function dish_pics()
    {
        return $this->hasMany('App\Models\Dish_pics');
    }
}
