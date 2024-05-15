<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TapWaterTicketFeodosia extends Model
{  
   
    use HasFactory;
    //содинить модель с таблицей, передать данные в TapWaterTicketController.php
    public $timestamps = true;
    protected $table = 'tapwaterticket_feodosia';
}
