<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccessDispatchersHomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dispatchershome_page_is_available()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
    

    
}
