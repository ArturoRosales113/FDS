<?php

namespace Models\App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
      /**
     * Get the user record associated with the order.
     */
    public function user()
    {
        return $this->hasOne('App\User');
    }

    /**
     * Get the dishes associated with the Order.
     */
    public function dishes()
    {
		return $this->belongsToMany('App\Dish', 'orders_dishes');
	}
}
