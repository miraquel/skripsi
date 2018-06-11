<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Address extends Model
{
    public function customers()
    {
        return $this->belongsToMany('App\Customer');
    }

    public function village()
    {
        return $this->belongsTo('App\Village');
    }
}
