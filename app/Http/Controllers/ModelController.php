<?php

namespace App\Http\Controllers;

use App\Http\Models\Model;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
    	$model = Model::all();
    	return view('admin.model')
    		->with('model', $model);
    }

    public function store(Request $request)
    {
    	$model = new Model;

    	$model->name = $request->input('name');

    	$model->save();

    	return redirect('/model')
    		->with('status', 'Model Info Added');
    }

    public function edit($id)
    {
    	$model = Model::findOrFail($id);
    	return view('admin.model.edit')
    		->with('model', $model);
    }

    public function update(Request $request $id)
    {
    	$model = Model::findOrFail($id);

    	$model->name =  $request->input('name');
    	$model->update();

    	return redirect('/model')
    		->with('status', 'Model information Added');
    }
}
