<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelationshipType extends Model
{
    protected $fillable  =['type','relationship_id'];
    public function relationship()
    {
        return $this->belongsTo('App\Relationship');
    }
}
