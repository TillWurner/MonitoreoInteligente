<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkingController extends Controller
{
    public function registration()
    {
        return view('parking.registration');
    }
}
