<?php

Use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/add-car',[CarController::class, 'addCar']);

Route::post('/create-car',[CarController::class,'createCar'])->name('car.create');

Route::get('/cars',[CarController::class,'getCar']);

Route::get('/cars/{id}',[CarController::class,'getCarById']);

Route::get('/delete-car/{id}', [CarController::class,'deleteCar']);

Route::get('/edit-car/{id}',[CarController::class,'editCar']);

Route::post('/update-car',[CarController::class,'updateCar'])->name('car.update');



Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
