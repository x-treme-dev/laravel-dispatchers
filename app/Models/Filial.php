<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filial extends Model
{
    use HasFactory;
    
    public function tapwatertickets(){
        return $this->hasMany(TapWaterTicket::class);
    }
}
