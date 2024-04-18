<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTapWaterTicketRequest as RequestsStoreTapWaterTicketRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\StoreTapWaterTicketRequest;

class TapWaterTicketController extends Controller
{
    //send data from FORM to tapwaterticket table 
    public function store(RequestsStoreTapWaterTicketRequest $request){
        $input = $request->all();
        
        dump($input);
    }
}
