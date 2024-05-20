<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Request;
 

class SendDataOfFormToTapWaterTicketControllerTest extends TestCase
{   
   
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_send_data_via_form_tapwaterticket_to_message_page()
    {  
        // тестовые данные для проверки отправки через форму (заявка Водопровод)
       Http::fake();
       
       Http::post('/message', [
        'date'=>'20.05.24',
        'time'=>'14:20:20',
        'type'=>'Test',
        'description' => 'test',
        'radio' => '2',
        'phone' => '+79789999999',
        'district' => 'Крым',
        'city' => 'Симферополь',
        'street' => 'Ленина',
        'building' => '1',
        'addressmap' => '',
        'notes' => 'test',
        'cityarea' => 'Центр',
        'works' => 'test',
        'image' => '2asd3las4asdf20.png',
     ]);

     Http::assertSentCount(1);
     
         
    }

}
