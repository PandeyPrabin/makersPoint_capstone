<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workorder extends Model
{
     protected $fillable=['workid','title','provider','customer','orderdate','deadline','absolutedeadline','additionalinfo','nomaterial','addmaterial','wetransfer','existingmaterial','deliveryby','workstatus'];
    
    protected $primaryKey = 'workid';
    
    public function customers()
    {
        return $this->belongsTo('App\Customer');
    }
    
}
