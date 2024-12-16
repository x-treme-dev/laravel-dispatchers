<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\TapWaterTicket;
use App\Http\Requests\StoreTapWaterTicketRequest;

class TicketEditController extends Controller
{
    //
    public function getTicketId($ticket_id){
    
    //echo 'ticket_id is ' . $ticket_id;
    $service = "водопроводу";
    $ticket_id = $ticket_id;
    // получить строку по id
    $rowTicket = DB::table('tapwatertickets')->where('id', $ticket_id)->first();
   // dump($rowTicket);
    return view('ticketedit', compact('service', 'ticket_id', 'rowTicket'))->with('rowTicket', $rowTicket);
    }
   
    public function updateTicket(StoreTapWaterTicketRequest $request, $ticket_id){
       
        $updated_ticket = TapWaterTicket::findOrFail($ticket_id);
       
        //dd($updated_ticket);
        $updated_ticket -> date =  $request-> date;
        $updated_ticket -> time = $request-> time;
        $updated_ticket -> type = $request-> type;
        $updated_ticket -> description = $request-> description;
        $updated_ticket -> radio = $request -> radio;
        $updated_ticket -> phone = $request -> phone;
        $updated_ticket -> district = $request -> district;
        $updated_ticket -> city = $request -> city;
        $updated_ticket -> street = $request -> street;
        $updated_ticket -> building = $request -> building;
        $updated_ticket -> addressmap = $request -> addressmap; 
        $updated_ticket -> notes = $request -> notes;
        $updated_ticket -> cityarea = $request -> cityarea;
        //to write path of file to table
        if($request -> hasFile('image')){
            $image = $request -> file('image');
            $path = $image -> store('upload', 'public');
            $updated_ticket -> image = $path;
        }

        $updated_ticket -> save();

        // Получаем строку из таблицы по ID
        $ticket_row = DB::table('tapwatertickets')->where('id', $ticket_id)->first();
        return view('ticketupdate')->with('ticket_row', $ticket_row);
    }

}
