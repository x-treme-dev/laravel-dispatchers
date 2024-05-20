<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RedirectDispatchersHomePageToTapwaterticketPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     //тестирование ссылок, перенаправления
      public function test_redirect_to_tapwaterticket_page()
      {
         $response = $this->from('/')->get('tapwaterticket');
 
         $response->assertStatus(200);
      }
}
