<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function reservations()
    {
      // code...
        return $this->hasMany('App\Reservation');
    }
}
