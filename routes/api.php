<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParkingLotController;
use App\Http\Controllers\MotorcycleController;
use App\Http\Controllers\CarController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/parkinglots', [ParkingLotController::class, 'index']);
Route::get('/parkinglots/{parkinglot}', [ParkingLotController::class, 'view']);
Route::post('/parkinglots', [ParkingLotController::class, 'store']);
Route::patch('/parkinglots/{parkinglot}', [ParkingLotController::class, 'update']);
Route::put('/parkinglots/{parkinglot}', [ParkingLotController::class, 'update']);
Route::delete('/parkinglots/{parkinglot}', [ParkingLotController::class, 'destroy']);


Route::get('/motorcycles', [MotorcycleController::class, 'index']);
Route::get('/motorcycles/{motorcycle}', [MotorcycleController::class, 'view']);
Route::post('/motorcycles', [MotorcycleController::class, 'store']);
Route::patch('/motorcycles/{motorcycle}', [MotorcycleController::class, 'update']);
Route::put('/motorcycles/{motorcycle}', [MotorcycleController::class, 'update']);
Route::delete('/motorcycles/{motorcycle}', [MotorcycleController::class, 'destroy']);


Route::get('/cars', [CarController::class, 'index']);
Route::get('/cars/{car}', [CarController::class, 'view']);
Route::post('/cars', [CarController::class, 'store']);
Route::patch('/cars/{car}', [CarController::class, 'update']);
Route::put('/cars/{car}', [CarController::class, 'update']);
Route::delete('/cars/{car}', [CarController::class, 'destroy']);





