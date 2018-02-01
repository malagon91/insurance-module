<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*
 * Table Customers
 * model Customer
 */
class Customer extends Model
{
    public function cars(){
        return $this->hasMany('App/Car');
    }
}
