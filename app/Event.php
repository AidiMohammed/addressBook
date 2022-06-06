<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function type()
    {
        return $this->hasOne('App\EventType');
    }
}
