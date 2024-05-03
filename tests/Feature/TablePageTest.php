<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TablePageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testTableTicketsPageStatus()
    {
        $response = $this->get('/tabletickets');

        $response->assertStatus(200);
    }
}
