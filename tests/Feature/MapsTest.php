<?php

namespace Tests\Feature;

use App\Country;
use Tests\TestCase;

class MapsTest extends TestCase
{
    /**
     * Makes sure all of our map routes have status 200
     *
     * @return void
     */
    public function testMapContentEndpointStatusIs200()
    {
        // Get all the countries from the DB
        $countries = Country::all();

        // Hit all of the country endpoints and make sure they return 200
        foreach($countries as $country){
            $response = $this->get("/maps/$country->ref");
            $response->assertStatus(200);
        }
    }

    /**
     * Make sure the map endpoints are returning the correct content
     * 
     * @return void
     */
    public function testMapsContentMatchesFiles()
    {
        $countries = Country::all();

        foreach($countries as $country) {
            
            $response = $this->get("/maps/$country->ref");
            $content = $response->content();
            
            $file = file_get_contents("resources/views/maps/{$country->ref}.blade.php");
            
            $this->assertSame($content, $file, 'Content does not match file');
        }
    }
    
    
    /**
     * Test if the Maps Endpoint status is 404
     *
     * @return void
     */
    public function testMapsEndpointStatusIs404()
    {
        $response = $this->get('/maps');
        $response->assertStatus(404);
    }

    /**
     * Invalid routes should return 404
     * 
     * @return void
     */
    public function testInvalidMapStatusIs404()
    {
        $response = $this->get("/maps/fake");
        $response->assertStatus(404);
    }
}
