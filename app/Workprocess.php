<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workprocess extends Model

{
    
     protected $table ='workprocesses';
     protected $primaryKey="workprocessid";

    
    public function employees()
    {
        return $this->hasMany('App\Employee', 'employeeid');
    }
    
    public function tasks()
    {
        return $this->belongsToMany('App\Task','workprocesses', 'workprocessid' ,'taskid');
    }
    
     public function machines()
    {
        return $this->belongsToMany('App\Machine', 'workprocesses', 'workprocessid' ,'machineid');
    }
}
