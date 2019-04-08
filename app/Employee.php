<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    protected $primaryKey="employeeid";
     public function workprocesses()
    {
         
        return $this->belongsTo('App\Workprocess');
    }
}
