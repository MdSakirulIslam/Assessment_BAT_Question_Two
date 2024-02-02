<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

//  Car modules
Route::get( '/', [CarController::class, 'index'] )->name( 'car.index' );
Route::get( '/car/create', [CarController::class, 'create'] )->name( 'car.create' );
Route::post( '/car/store', [CarController::class, 'store'] )->name( 'car.store' );