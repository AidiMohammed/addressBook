<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street','city','zip_code','country','profil_id','contact_id'];

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
        return $this->hasOne('App\AddressType');
    }
}
