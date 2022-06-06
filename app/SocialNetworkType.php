<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialNetworkType extends Model
{
    protected $fillable  =['type','social_network_id'];
    public function socialnetwork()
    {
        return $this->belongsTo('App\SocialNetwork');
    }
}
