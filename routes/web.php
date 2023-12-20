<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParkingLotController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\SiteController;

//view Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');



//view parking lot
Route::get('/parkinglot/show', [ParkingLotController::class, 'index'])->name('index');

//view motorcycles
Route::get('/motorcycle/index', [MotorcycleController::class, 'index'])->name('index');

//view cars
Route::get('/car/index', [CarController::class, 'index'])->name('index');



//parkinlot
Route::get('/parkinglot/delete/{id}', [ParkingLotController::class, 'delete'])->name('delete');
Route::get('/parkinglot/create', [ParkingLotController::class, 'create']);
Route::post('/parkinglot/store', [ParkingLotController::class, 'store']);
Route::get('/parkinglot/delete/{id}', [ParkingLotController::class, 'delete']);


//motorcycle
Route::get('/motorcycle/delete/{id}', [MotorcycleController::class, 'delete'])->name('delete');
Route::get('/motorcycle/create', [MotorcycleController::class, 'create']);
Route::post('/motorcycle/store', [MotorcycleController::class, 'store'])->name('motorcycle.store');
Route::get('/motorcycle/delete/{id}', [MotorcycleController::class, 'delete']);


//car
Route::get('/car/delete/{id}', [CarController::class, 'delete'])->name('delete');
Route::get('/car/create', [CarController::class, 'create']);
Route::post('/car/store', [CarController::class, 'store'])->name('car.store');
Route::get('/car/delete/{id}', [CarController::class, 'delete']);

//edit parking lot
Route::get('/parkinglot/edit/{id}',[ParkingLotController::class, 'edit'])->name('edit');
Route::post('/parkinglot/update/{id}',[ParkingLotController::class, 'update'])->name('update');

//edit motorcycle
Route::get('/motorcycle/edit/{id}',[MotorcycleController::class, 'edit'])->name('edit');
Route::post('/motorcycle/update/{id}',[MotorcycleController::class, 'update'])->name('update');

//edit car
Route::get('/car/edit/{id}',[CarController::class, 'edit'])->name('edit');
Route::post('/car/update/{id}',[CarController::class, 'update'])->name('update');

