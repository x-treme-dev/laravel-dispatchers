<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessagePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   

    public function test_redirect_to_dispatcherhome_page()
    {
        $response = $this->from('/message')->get('/');

        $response->assertStatus(200);
     } 

}
