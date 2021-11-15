<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TemplateController::class, 'index']);

Route::get('/about', [TemplateController::class, 'about']);

Route::get('/product', [TemplateController::class, 'product']);

Route::get('/contact', [TemplateController::class, 'contact']);

Route::get('/admin', [TemplateController::class, 'adminIndex']);
/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function(){
	return view('layouts.admin');
});

Route::get('/dashboard', function(){
	return view('layouts.app');
});*/

Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
