<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    	$category = Category::all();

    	return view('admin.category')
    		->with(category, 'category');
    }

    public function store(Request $request)
    {
    	$category = new Category;

    	$category->title = $request->input('title');

    	$category->save();

    	return redirect('/category')
    		->with('status', 'Category Info Added');
    }

    public function edit($id)
    {
    	$category = Category::findOrFail($id);
    	return view('admin.category.edit')
    		->with('category', $category);
    }

    public function update(Request $request $id)
    {
    	$category = Category::findOrFail($id);

    	$category->title = $request->input('title');

    	$category->update();

    	return redirect('/category')
    		->with('status', 'Category Information Added');
    }
}
