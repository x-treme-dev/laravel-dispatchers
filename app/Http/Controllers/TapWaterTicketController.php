<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTapWaterTicketRequest;
use Illuminate\Support\Facades\DB;
use App\Models\TapWaterTicket;

class TapWaterTicketController extends Controller
{
    // получение данных из формы и запись в таблицу
    public function store(StoreTapWaterTicketRequest $request){
      
        $tapwaterticket = new TapWaterTicket();
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
        //to write path of file to table
        if($request -> hasFile('image')){
            $image = $request -> file('image');
            $path = $image -> store('upload', 'public');
            $tapwaterticket -> image = $path;
        }

        $tapwaterticket -> save();
       // to get 10 latest rows 
        $last_ticket = DB::table('tapwatertickets')->orderBy('id', 'DESC')->take(10)->first();
        // передать данные о последней записи в сообщение пользователю при создании заявки
        return view('/message')->with('last_ticket', $last_ticket);
    }
}
