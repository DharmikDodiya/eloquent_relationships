<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Passenger;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function index($id){
        $driver = Passenger::find($id)->driver;
        //return $driver;
        return view('hasonethrough.showalldriver',['driver' =>$driver]);
    }   

    public function passengerdata($id){
        $passenger = Driver::find($id)->passenger;
        //return $passenger;
        return view('hasonethrough.showpassenger',['passenger' =>$passenger]);
    } 
}
