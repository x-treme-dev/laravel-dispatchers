<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AccessTapWaterTicketTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_tapwaterticket_page_is_available()
    {
        $response = $this->get('/tapwaterticket');
        
         $response->assertStatus(200);
    }
}
