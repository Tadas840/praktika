<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CattleController;
use App\Http\Controllers\VeisleController;
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


// Cattle
Route::resource('main', CattleController::class);
Route::get('/',[CattleController::class,'index']);
Route::get('delete/{id}', [CattleController::Class,'destroy']);
Route::get('edit/{id}',[CattleController::Class,'show']);      
Route::put('edit/{id}',[CattleController::Class,'edit']);   

// Veisles 
Route::resource('species', VeisleController::class);
Route::get('species',[VeisleController::class,'index']);
Route::get('editspec/{id}',[VeisleController::Class,'show']);
Route::put('editspec/{id}',[VeisleController::Class,'edit']); 
Route::get('deleteveisl/{id}', [VeisleController::Class,'destroy']);




