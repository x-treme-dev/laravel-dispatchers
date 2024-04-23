<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\Request;
use App\Http\Requests\StoreTapWaterTicketRequest;
use Illuminate\Support\Facades\DB;
use App\Models\TapWaterTicketFeodosia;

class TapWaterTicketController extends Controller
{
    //send data from FORM to tapwaterticket table 
    public function store(StoreTapWaterTicketRequest $request){
      
        $tapwaterticket = new TapWaterTicketFeodosia();
        
        $tapwaterticket -> date =  $request-> date;
        $tapwaterticket -> time = $request-> time;
        $tapwaterticket -> type = $request-> type;
        $tapwaterticket -> description = $request-> description;
        $tapwaterticket -> radio = $request -> radio;
        $tapwaterticket -> phone = $request -> phone;
        $tapwaterticket -> district = $request -> district;
        $tapwaterticket -> city = $request -> city;
        $tapwaterticket -> street = $request -> street;
        $tapwaterticket -> building = $request -> building;
        $tapwaterticket -> addressmap = $request -> addressmap; 
        $tapwaterticket -> notes = $request -> notes;
        $tapwaterticket -> cityarea = $request -> cityarea;
        $tapwaterticket -> works = $request -> works;

        if($request -> hasFile('image')){
            $image = $request -> file('image');
            $path = $image -> store('upload', 'public');
            $tapwaterticket -> image = $path;
            dump($path);
        }

        $tapwaterticket -> save();
      
    }
}
