<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function profile(){
        return view('web.profile');
    }
    public function minor_socratics(){
        return view('web.minor_socratics');
    }
    public function on_pleasure(){
        return view('web.on_pleasure');
    }
    public function contact(){
        return view('web.contact');
    }
    public function isocrates(){
        return view('web.isocrates');
    }
    public function philebus(){
        return view('web.philebus');
    }
    public function aristotle(){
        return view('web.aristotle');
    }
    public function en(){
        return view('web.en');
    }
}
