<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TableTicketsController extends Controller
{
    //
    public function getTickets(){
        $tickets = DB::table('tapwaterticket_feodosia')->get();
        $sortedTickets = $tickets->sortBy('created_at')->reverse();
        //dump($tickets);
        return view('tabletickets', ['tickets' => $sortedTickets]);
    }
}
