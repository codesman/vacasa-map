<?php

namespace Tests\Unit;

use App\Country;
use Tests\TestCase;

class MapsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMapContentTemplatesExist()
    {
        // Fetch all the countries in the DB
        $countries = Country::all();
        
        // Iterate the countries and make sure the template files exist
        foreach($countries as $country) {
            $path = "resources/views/maps/{$country->ref}.blade.php";
            $this->assertFileExists($path, "$path does not exist");
        }
    }
}
