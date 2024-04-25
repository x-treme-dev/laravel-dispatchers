<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DispatchersHomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDispatchersHomePageStatus()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    
     //тестирование ссылок, перенаправления
     public function testClickLinkRedirectToTapWaterTicketPage()
     {
        $response = $this->from('/')->get('tapwaterticket');

        $response->assertStatus(200);
     }
}
