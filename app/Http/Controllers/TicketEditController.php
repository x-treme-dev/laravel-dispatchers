<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
}
