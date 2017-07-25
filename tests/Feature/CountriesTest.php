<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CountriesTest extends TestCase
{
    /**
     * Test if the Countries Endpoint status is 200
     * 
     * @return void
     */
    public function testCountriesEndpointFor200()
    {
        $response = $this->get('/countries');

        $response->assertStatus(200);
    }
}
