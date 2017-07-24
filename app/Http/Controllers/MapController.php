<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function show(string $ref)
    {
        $country = Country::ref($ref)->firstOrFail();
        
        return view("maps/$country->ref");
    }
}
