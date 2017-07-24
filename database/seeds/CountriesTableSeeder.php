<?php

use App\Country;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    private $countries = [
        ['name' => 'United States', 'ref' => 'united-states'],
        ['name' => 'Europe', 'ref' => 'europe'],
        ['name' => 'South America', 'ref' => 'south-america'],
        ['name' => 'Central America', 'ref' => 'central-america'],
        ['name' => 'Caribbean', 'ref' => 'caribbean'],
        ['name' => 'Africa', 'ref' => 'africa'],
    ];
    
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->countries as $country) {
            $temp = Country::create([
                'name' => $country['name'],
                'ref' => $country['ref']
            ]);
            
            $temp->save();
        }
        
        
    }
}
