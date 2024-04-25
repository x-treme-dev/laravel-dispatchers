<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TapWaterTicketTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testTapWaterTicketPageStatus()
    {
        $response = $this->get('/tapwaterticket');
        
         $response->assertStatus(200);
    }

    public function testClickLinkRedirectToDispatcherHomePage()
    {   // перенаправление по ссылке 
        $response = $this->from('tapwaterticket')->get('/');
     
        $response->assertStatus(200);
     }


}
