<?php

namespace Tests\Feature;

use App\Models\TapWaterTicketFeodosia;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
 

class SendDataOfFormToTapWaterTicketControllerTest extends TestCase
{ 
  // чистит тестовую таблицу  
  use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
   
     /**@test**/
    public function test_send_data_via_form_tapwaterticket_to_message_page()
    {  

     // вывод исключений в тестах
      $this->withoutExceptionHandling();
        // тестовые данные для проверки отправки через форму (заявка Водопровод) без проверки csrf-токена
      
      $response = $this->post('/message', [
        'date'=>'21.05.2024',
        'time'=>'14:20:20',
        'type'=>'Утечка воды',
        'description' => 'test',
        'radio' => 2,
        'phone' => '+79789999999',
        'district' => 'Крым',
        'city' => 'Симферополь',
        'street' => 'Ленина',
        'building' => '1',
        'addressmap' => '',
        'notes' => 'test',
        'cityarea' => 'Центр',
        //'works' => 'test',
        //тестирование загрузки файла
        'file' => $file = UploadedFile::fake()->image('random.jpg'),
     ]);
    
    
     $response -> assertOk();
     //указаны количестов запросов и Модель
     $this->assertCount(1, TapWaterTicketFeodosia::all());
    }

}
