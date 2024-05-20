<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OutputDataViaTableTicketsPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
  //тестирование данных, выводимых в таблицу
  public function test_output_data_via_tabletickets_page()
  {
     $response = $this->get('/tabletickets');
     // получили объект tickets на странице /tabletickets
     $response->assertViewHas('tickets');
  }
}
