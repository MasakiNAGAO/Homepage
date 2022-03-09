<?php

namespace App\Http\Controllers;

use App\Category;
use App\MajorCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('categories.index', compact('categories'));
    }
    
    public function create()
    {
        $major_categories = MajorCategory::all();
        return view('categories.create', compact('major_categories'));
    }
    
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->headline = $request->input('headline');
        $category->caption = $request->input('caption');
        $category->major_category_id = $request->input('major_category_id');
        $category->save();
        
        return redirect()->route('categories.show', ['id' => $category->id]);
    }
    
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }
    
    public function edit(Category $category)
    {
        $major_categories = MajorCategory::all();
        
        return view('categories.edit', compact('category', 'major_categories'));
    }
    
    public function update(Request $request, Category $category)
    {
        $category->name = $request->input('name');
        $category->headline = $request->input('headline');
        $category->caption = $request->input('caption');
        $category->major_category_id = $request->input('major_category_id');
        $category->update();
        
        return redirect()->route('categories.show', ['id' => $category->id]);
    }
    
    public function destroy(Category $category)
    {
        $category->delete();
        
        return redirect()->route('categories.index');
    }
}
