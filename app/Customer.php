<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function user()
    {
        return $this->morphOne('User', 'userable');
    }

    public function addresses()
    {
        return $this->belongsToMany('App\Address');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
