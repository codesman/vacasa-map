<?php

namespace Tests\Unit;

use App\Country;
use Tests\TestCase;

class CountryTest extends TestCase
{
    protected $country; // We need a country to test!

    /**
     * Set up
     * 
     * @return void
     */
    public function setUp()
    {
        parent::setUp();

        // Instantiate a Country
        if (is_null($this->country)) {
            $this->country = new Country();
        }
    }
    
    /**
     * Verify that the Country Class has the scopeRef method.
     * 
     * @return void
     */
    public function testScopeRef()
    {
        $this->assertTrue(
            method_exists($this->country, 'scopeRef'),
            'Country does not have the scopeRef method'
        );
    }

    /**
     * Verify that the Country Class has the name attribute
     * 
     * @return void
     */
    public function testHasNameAttribute()
    {
        $this->assertObjectHasAttribute(
            'name',
            $this->country,
            'Country does not have the name attribute'
        );
    }

    /**
     * Verify that the Country Class has the ref attribute
     * 
     * @return void
     */
    public function testHasRefAttribute()
    {
        $this->assertObjectHasAttribute(
            'ref',
            $this->country,
            'Country does not have the ref attribute'
        );
    }
}
