<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
        protected $primaryKey="taskid";

     public function workprocesses()
    {
        return $this->belongsToMany('App\Workprocess');
    }
}
