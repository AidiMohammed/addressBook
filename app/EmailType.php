<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailType extends Model
{
    protected $fillable =['email_id','type'];
    public function email()
    {
        return $this->belongsTo('App\Email');
    }
}
