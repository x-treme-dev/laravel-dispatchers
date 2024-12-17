<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TapWaterTicket;
 


class TapWaterTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    //связать фабрику и модель
     protected $model = TapWaterTicket::class;

    public function definition()
    {
        

        return [
            //генерация фейковых данных для тестирования внешнего вида таблиц
            'date'=>'2024-12-17',
            'time'=> $this->faker-> time('H:i:s', 'now'),
            'type'=> 'Открытый, поврежденный люк', 
            'description' => 'тест описание неисправности',
            'radio' => (string) $this->faker-> numberBetween(1,3),
            'phone'=> $this->faker->phoneNumber(null, null),
            'district'=>"Тест:",
            'city'=> $this->faker-> city(),
            'street'=> $this->faker->streetAddress(),
            'building'=> $this->faker->buildingNumber(),
            'addressmap'=>'23.2309854, 34.08208523',
            'notes'=>'тест заметки',
            'cityarea'=>'тест центральный район',
            'image'=>'154fldjq5942105812.png',
        ];
    }
}
