<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['indicative','phone_number','profil_id','contact_id'];

    public function profil()
    {
        return $this->belongsTo('App\Profil');
    }

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function type()
    {
        return $this->hasOne('App\PhoneType');
    }
}
