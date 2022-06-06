<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddressType extends Model
{
    protected $fillable = ['type','address_id'];

    public function address()
    {
        return $this->belongsTo('App\Address');
    }
}
