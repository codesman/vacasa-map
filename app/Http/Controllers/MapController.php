<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function show(string $country)
    {
        $countries = [
            'united-states',
            'south-america',
            'central-america',
            'caribbean',
            'africa',
        ];
        
        if (in_array($country, $countries)) {
            return view("maps/$country");
        } 
        abort(404);
    }
}
