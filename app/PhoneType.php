<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneType extends Model
{
    protected $fillable = ['type','phone_id'];
    public function phone()
    {
        return $this->belongsTo('App\Phone');
    }
}
