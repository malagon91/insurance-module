<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    function customer() {
        return $this->belongsTo('App\Customer');
    }
}
