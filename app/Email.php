<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = ['email','contact_id','profil_id'];

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
        return $this->hasOne('App\EmailType');
    }
}
