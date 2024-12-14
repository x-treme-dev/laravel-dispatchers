<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TableTicketsController extends Controller
{
    //
    public function getTickets(){
        // сортировака по убыванию даты
        $tickets = DB::table('tapwaterticket')->latest()->get();
        //dump($tickets);
        return view('tabletickets', ['tickets' => $tickets]);
    }
}
