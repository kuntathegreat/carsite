<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale = Sale::all();
        return view('admin.sale')
            ->with('sale', $sale);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sale = new Sale;

        $sale->user_id = $request->input('user_id');
        $sale->vehicle_id = $request->input('vehicle_id');
        $sale->date = $request->input('date');
        $sale->payment_mode = $request->input('payment_mode');
        
        $sale->save();

        return redirect('/sale')
            ->with('status', 'Sales Info Added');
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
    public function edit($id)
    {
        $sale = Sale::findOrFail($id);
        return view('admin.sale.edit')
            ->with('sale', $sale);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sale = Sale::findOrFail($id);

        $sale->user_id = $request->input('user_id');
        $sale->vehicle_id = $request->input('vehicle_id');
        $sale->date = $request->input('date');
        $sale->payment_mode = $request->input('payment_mode');
        
        $sale->update();

        return redirect('/sale')
            ->with('status', 'Sales Info Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
