<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    public function minis()
    {
        return $this->belongsToMany('App\Mini');
    }
}
