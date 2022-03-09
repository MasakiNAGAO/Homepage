<?php

namespace App\Http\Controllers;

use App\Text;
use App\Category;
use Illuminate\Http\Request;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts=Text::all();
        return view('texts.index', compact('texts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show(Text $text)
    {
        return view('texts.show', compact('text'));
    }
}
