<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workprocess extends Model
{
     protected $table ='workprocesses';
    
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
    
    public function tasks()
    {
        return $this->belongsToMany('App\Tasks');
    }
    
     public function machines()
    {
        return $this->belongsToMany('App\Machine');
    }
}
