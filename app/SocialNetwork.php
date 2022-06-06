<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    protected $fillable = ['url','contact_id','profil_id'];

    public function profil()
    {
        return $this->belongsTo('App\Profil');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function socialNetworks()
    {
        return $this->hasOne('App\SocialNetwork');
    }
}
