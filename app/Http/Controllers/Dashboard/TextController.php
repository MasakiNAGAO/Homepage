<?php

namespace App\Http\Controllers\Dashboard;

use App\Text;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\TextsImport;
use Maatwebsite\Excel\Facades\Excel;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts = Text::paginate(15);
        return view('dashboard.texts.index', compact('texts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
 
        return view('dashboard.texts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'greekText' => 'required',
            'japaneseTranslation' => 'required',
        ],
        [
            'greekText.required' => 'ギリシア語は必須です。',
            'japaneseTranslation.required' => '日本語訳は必須です。',
        ]);
 
        $text = new Text();
        $text->greekText = $request->input('greekText');
        $text->japaneseTranslation = $request->input('japaneseTranslation');
        $text->category_id = $request->input('category_id');
        $text->save();
 
        return redirect()->route('dashboard.texts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Text $text)
    {
        $categories = Category::all();
 
        return view('dashboard.texts.edit', compact('text', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Text $text)
    {
        $request->validate([
            'greekText' => 'required',
            'japaneseTranslation' => 'required',
        ],
        [
            'greekText.required' => 'ギリシア語は必須です。',
            'japaneseTranslation.required' => '日本語訳は必須です。',
        ]);
 
        $text->greekText = $request->input('greekText');
        $text->japaneseTranslation = $request->input('japaneseTranslation');
        $text->category_id = $request->input('category_id');
        $text->update();
 
        return redirect()->route('dashboard.texts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        $text->delete();
        return redirect()->route('dashboard.texts.index');
    }
    
    public function import(Text $text)
      {
          return view('dashboard.texts.import');
      }
 
      public function import_csv(Request $request)
      {
          if ($request->hasFile('csv')) {
              Excel::import(new TextsImport, $request->file('csv'));
              return redirect()->route('dashboard.texts.import_csv')->with('flash_message', 'CSVでの一括登録が成功しました');
          }
          return redirect()->route('dashboard.texts.import_csv')->with('flash_message', 'CSVが追加されていません。CSVを追加してください');
      }
}