<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TapWaterTicketFeodosia;

class TapWaterTicketFeodosiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {     // Используем фабрику для создания десяти тестовых записей в таблице
          TapWaterTicketFeodosia::factory()->count(10)->create();
    }
}
