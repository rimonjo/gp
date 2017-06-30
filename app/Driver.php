<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
    public $table="drivers";

    public function trips()
    {
        return $this->hasMany('App\Trip');
    }
    public function distractions()
    {
        return $this->hasMany('App\Distaraction');
    }
}
