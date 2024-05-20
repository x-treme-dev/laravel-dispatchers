<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RedirectDispatchersHomePageToTableticketPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
     //тестирование ссылок, перенаправления
     public function test_redirect_to_table_tickets_page()
     {
        $response = $this->from('/')->get('tabletickets');

        $response->assertStatus(200);
     }
}
