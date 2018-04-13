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
        return $this->hasOne('App\Category');
    }
    /**
     * Get the dishes associated with the Order.
     */
    public function orders()
    {
		return $this->belongsToMany('App\Orders', 'orders_dishes');
	}
}
