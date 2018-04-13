<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    /**
     * Get the dishes associated with the Order.
     */
    public function dishes()
    {
		return $this->belongsToMany('App\Models\Dish', 'orders_dishes');
	}}
