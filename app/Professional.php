<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $fillable = ['profession','service','contact_id','profil_id'];

    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    public function profil()
    {
        return $this->belongsTo('App\Profil');
    }
}
