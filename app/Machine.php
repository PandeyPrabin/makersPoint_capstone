<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
     public function workprocesses()
    {
        return $this->belongsToMany('App\Workprocess');
    }
}
