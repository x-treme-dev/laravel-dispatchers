<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\TapWaterTicketFeodosia;
 


class TapWaterTicketFeodosiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    //связать фабрику и модель
     protected $model = TapWaterTicketFeodosia::class;

    public function definition()
    {
        

        return [
            //генерация фейковых данных для тестирования внешнего вида таблиц
            'date'=>'13.05.24',
            'time'=> $this->faker-> time('H:i:s', 'now'),
            'type'=> 'Открытый, поврежденный люк', 
            'description' => 'тест описание неиспрвности',
            'radio' => (string) $this->faker-> numberBetween(1,3),
            'phone'=> $this->faker->phoneNumber(null, null),
            'district'=>"Тест:",
            'city'=> $this->faker-> city(),
            'street'=> $this->faker->streetAddress(),
            'building'=> $this->faker->buildingNumber(),
            'addressmap'=>'23.2309854, 34.08208523',
            'notes'=>'тест заметки',
            'cityarea'=>'тест центральный район',
            'works'=>'тест колодцы, люки, задвижки',
            'image'=>'154fldjq5942105812.png',
        ];
    }
}
