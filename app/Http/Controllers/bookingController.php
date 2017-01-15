<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    function index()
    {
        return view('front.index',['Booking' => Event::orderBy('start_time')->get()]));
    }
    //
}
