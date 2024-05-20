<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RedirectTableTicketsPageToDispatcherHomePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
      //тестирование ссылок, перенаправления
      public function test_redirect_to_dispatherhome_page()
      {
         $response = $this->from('/tabletickets')->get('/');
 
         $response->assertStatus(200);
      }
 
     
}
