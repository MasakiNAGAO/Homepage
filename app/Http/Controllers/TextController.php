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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('texts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $text = new Text();
        $text->greekText = $request->input('greekText');
        $text->japaneseTranslation = $request->input('japaneseTranslation');
        $text->category_id = $request->input('category_id');
        $text->save();
        
        return redirect()->route('texts.show', ['id' => $text->id]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit(Text $text)
    {
        $categories = Category::all();
        
        return view('texts.edit', compact('text', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Text $text)
    {
        $text->greekText = $request->input('greekText');
        $text->japaneseTranslation = $request->input('japaneseTranslation');
        $text->category_id = $request->input('category_id');
        $text->update();
        
        return redirect()->route('texts.show', ['id' => $text->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        $text->delete();
        
        return redirect()->route('texts.index');
    }
}
