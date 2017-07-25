<?php

namespace Tests\Feature;

use Tests\TestCase;

class CountriesTest extends TestCase
{
    /**
     * Test if the Countries Endpoint status is 200
     * 
     * @return void
     */
    public function testCountriesEndpointStatusIs200()
    {
        $response = $this->get('/countries');
        $response->assertStatus(200);
    }
}
