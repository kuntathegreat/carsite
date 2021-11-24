<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>'auth'], function () {

    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
    Route::resource('/vehicles', \App\Http\Controllers\VehiclesController::class);
//    Route::get('/dashboard', [
//        'uses' => 'DashboardController@index'
//    ])->name('/dashboard');


});