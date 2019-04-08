<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
    
{
        protected $primaryKey="machineid";

     public function workprocesses()
    {
        return $this->belongsToMany('App\Workprocess');
    }
}
