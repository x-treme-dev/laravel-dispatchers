<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RedirectMassagePageTestToTableTicketsPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_redirect_to_tabletickets_page()
    {
        $response = $this->from('/message')->get('/tabletickets');

        $response->assertStatus(200);
     } 
}
