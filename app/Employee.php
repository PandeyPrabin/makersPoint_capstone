<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
     public function workprocesses()
    {
        return $this->belongsTo('App\Workprocess');
    }
}
