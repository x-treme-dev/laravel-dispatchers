<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RedirectTapWaterTicketToDispatcherHomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_redirect_to_dispatcherhome_page()
    {   // перенаправление по ссылке 
        $response = $this->from('tapwaterticket')->get('/');
     
        $response->assertStatus(200);
     }

}
