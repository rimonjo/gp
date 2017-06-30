<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distaraction extends Model
{
    //
    public $table="distractions";

    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }

    public function trip()
    {
        return $this->belongsTo('App\Trip');
    }
}
