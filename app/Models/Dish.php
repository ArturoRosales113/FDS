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
     * Get the orders associated with the dish.
     */
    public function orders()
    {
		return $this->belongsToMany('App\Orders', 'orders_dishes');
	}
    /**
     * Get the characteristics associated with the dish.
     */
    public function dishes()
    {
        return $this->belongsToMany('App\Dish', 'orders_dishes');
    }
}
