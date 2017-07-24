<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = [];

    public function scopeRef($query, $ref) {
        return $query->where('ref', $ref);
    }
}
