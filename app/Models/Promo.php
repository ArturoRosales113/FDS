<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
 use Notifiable;

 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'dish_id', 'content', 'code',
 ];
 	/**
     * Get the dish associated with the Promo.
     */
    public function dish()
    {
        return $this->hasOne('App\Models\Dish');
    }
}
