<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TapWaterTicket;

class TapWaterTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     // Используем фабрику для создания десяти тестовых записей в таблице
          TapWaterTicket::factory()->count(10)->create();
    }
}
