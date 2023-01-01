<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CattleController;
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



Route::get('/',[CattleController::class,'index']);
Route::resource('main', CattleController::class);
Route::get('delete/{id}', [CattleController::Class,'destroy']);
Route::get('edit/{id}',[CattleController::Class,'show']);      
Route::put('edit/{id}',[CattleController::Class,'edit']);   


Route::get('/Veisles', function(){
    return view('Veisles');
});
