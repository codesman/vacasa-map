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
    public function testGetMaps()
    {
        $countries = Country::all();

        foreach($countries as $country){
            $response = $this->get("/maps/$country->ref");
            $response->assertStatus(200);
        }
    }
    
    /**
     * Test if the Maps Endpoint status is 404
     *
     * @return void
     */
    public function testMapsEndpointReturns404()
    {
        $response = $this->get('/maps');
        $response->assertStatus(404);
    }

    /**
     * Invalid routes should return 404
     * 
     * @return void
     */
    public function testGetInvalidMap()
    {
        $response = $this->get("/maps/fake");
        $response->assertStatus(404);
    }


}
