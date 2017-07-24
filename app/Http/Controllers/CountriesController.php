<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function index()
    {
        return
            [
                ['name' => 'United States', 'ref' => 'united-states'],
                ['name' => 'Europe', 'ref' => 'europe'],
                ['name' => 'South America', 'ref' => 'south-america'],
                ['name' => 'Central America', 'ref' => 'central-america'],
                ['name' => 'Caribbean', 'ref' => 'caribbean'],
                ['name' => 'Africa', 'ref' => 'africa'],
            ];
    }
}
