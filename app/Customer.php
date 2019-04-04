<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     public function workorders()
    {
        return $this->hasMany('App\Workorder');
    }
}
