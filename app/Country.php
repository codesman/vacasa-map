<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $name;
    protected $ref;
    
    protected $guarded = [];

    public function scopeRef($query, $ref)
    {
        return $query->where('ref', $ref);
    }
}
