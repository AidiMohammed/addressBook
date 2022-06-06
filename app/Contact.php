<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function professional()
    {
        return $this->hasOne('App\Professional');
    }

    public function emails()
    {
        return $this->hasMany('App\Email');
    }

    public function addresses()
    {
        return $this->hasMany('App\Addresses');
    }

    public function phones()
    {
        return $this->hasMany('App\Phone');
    }
    
    public function socialNetworks()
    {
        return $this->hasMany('App\SocialNetwork');
    }

    public function event()
    {
        return $this->hasMany('App\Event');
    }

    public function relationShips()
    {
        return $this->hasOne('App\Relationship');
    }
}
