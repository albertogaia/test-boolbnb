<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    public function services(){
        return $this->belongsToMany('App\Service');
    }
}
