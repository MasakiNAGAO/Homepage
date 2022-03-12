<?php

namespace App\Http\Controllers;

use App\Text;
use App\Category;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function profile(){
        return view('web.profile');
    }
    public function minor_socratics(){
        $categories=Category::where('major_category_name', "minor_socratics")->get();
        $texts=Text::all();
        return view('web.minor_socratics', compact('categories', 'texts'));
    }
    public function on_pleasure(){
        return view('web.on_pleasure');
    }
    public function contact(){
        return view('web.contact');
    }
    public function isocrates(){
        $categories=Category::where('major_category_name', 'isocrates')->get();
        $texts=Text::all();
        return view('web.isocrates', compact('categories', 'texts'));
    }
    public function philebus(){
        $categories=Category::where('major_category_name', 'philebus')->get();
        $texts=Text::all();
        return view('web.philebus',  compact('categories', 'texts'));
    }
    public function aristotle(){
        $categories=Category::where('major_category_name', 'aristotle')->get();
        $texts=Text::all();
        return view('web.aristotle',  compact('categories', 'texts'));
    }
    public function en(){
        $categories=Category::where('major_category_name', 'en')->get();
        $texts=Text::all();
        return view('web.en',  compact('categories', 'texts'));
    }
}
