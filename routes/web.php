<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehiclesController;

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

Route::get('/', [\App\Http\Controllers\TemplateController::class, 'index']);

Route::get('/about', [\App\Http\Controllers\TemplateController::class, 'about']);

Route::get('/product', [\App\Http\Controllers\TemplateController::class, 'product']);

Route::get('/contact', [\App\Http\Controllers\TemplateController::class, 'contact']);

Route::get('/admin', [\App\Http\Controllers\TemplateController::class, 'adminIndex']);

Route::get('/test', [\App\Http\Controllers\VehiclesController::class, 'index']);

Route::get('/vehicle', [VehiclesController::class, 'index'])->name('index');
Route::post('/save-vehicle', [VehiclesController::class, 'store'])->name('save-vehicle');
Route::get('/vehicle-{id}', [VehiclesController::class, 'edit'])->name('vehicle-edit');
Route::put('/vehicle-update/{id}', [VehiclesController::class, 'update'])->name('update');

Route::get('/sale', [SalesController::class, 'index'])->name('index');
Route::post('/save-sale', [SalesController::class, 'store'])->name('save-sale');
Route::get('/sale-{id}', [SalesController::class, 'edit'])->name('sale-edit');
Route::put('/sale-update/{id}', [SalesController::class, 'update'])->name('update');




/*Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function(){
	return view('layouts.admin');
});

Route::get('/dashboard', function(){
	return view('layouts.app');
});*/

Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
