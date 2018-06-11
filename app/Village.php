<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }
}
