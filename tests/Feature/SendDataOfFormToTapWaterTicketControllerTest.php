<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SendDataOfFormToTapWaterTicketControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testSendDataFromFormToTapWaterTicketController()
    {  
        // тестовые данные для проверки отправки через форму (заявка Водопровод)
        $response = $this->json('POST', '/message', [
            'date' => '25.04.2024',
            'time' => '11:58:00',
            'type' => 'Замена труб',
            'description' => 'Описание события...',
            'radio' => 1,
            'phone' => '+79787792837',
            'district' => 'Крымская область',
            'city' => "Симферополь",
            'street' => "Ленина",
            'building' => '1',
            'addressmap' => '1.232323, 2.2322423423',
            'notes' => 'Нужны хомуты d300',
            'cityarea' => 'Центральный район',
            'works' => 'Работы по снятию асфальта'
        ]);

        $response->assertStatus(200);
        //идентично $response->assertOk();
    }
}
