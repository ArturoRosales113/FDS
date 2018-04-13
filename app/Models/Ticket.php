<?php

namespace Models\App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * Get the user record associated with the ticket.
     */
    public function deliverer()
    {
        return $this->hasOne('App\Models\User');
    }    
    /**
     * Get the user record associated with the ticket.
     */
    public function order()
    {
        return $this->hasOne('App\Models\Order');
    }    

}
