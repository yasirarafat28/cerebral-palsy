<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    //

    public function country(){
        return $this->belongsTo('App\Country','country_id');
    }
}
