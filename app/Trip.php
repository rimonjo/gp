<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    public $table="trips";
    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }
    
    public function distractions()
    {
        return $this->hasMany('App\Distaraction');
    }
}
