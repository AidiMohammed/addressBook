<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profil extends Model
{

    protected $fillable = ['user_id','name','surname','avatar_user'];

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

}
