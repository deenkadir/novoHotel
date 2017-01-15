<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function rooms()
    {
        return view('front.rooms');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function about()
    {
        return view('front.about');
    }
    public function booking()
    {
        return view('front.booking');
    }
    //
}
