<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
class TrainController extends Controller
{
    //
    public function index(){
        $trains = Train::where('Departure_Time', '>' ,date('H:i:s'))->get();

        return view('trains', compact('trains'));
    }
}
