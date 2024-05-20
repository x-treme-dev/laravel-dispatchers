<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RedirectTapWaterTicketToMessagePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_redirect_to_message_page()
    {   // перенаправление по ссылке 
        $response = $this->from('tapwaterticket')->get('/message');
     
        $response->assertStatus(405);
     }
}
