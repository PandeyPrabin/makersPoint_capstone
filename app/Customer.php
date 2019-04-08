<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
        protected $primaryKey="customerid";

     public function workorders()
    {
        return $this->hasMany('App\Workorder');
    }
}
