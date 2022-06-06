<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    protected $fillable =['event','event_id'];
    public function event()
    {
        return $this->belongsTo('App\Event');
    }
}
