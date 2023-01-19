<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CattleController;
use App\Http\Controllers\VeisleController;
use App\Http\Controllers\DisplayDataController;
use App\Http\Controllers\SPDataController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\ScanController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartSecondController;
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
Route::get('edit/{id}',[CattleController::Class,'show']);      
Route::put('edit/{id}',[CattleController::Class,'edit']);   

// Veisles 
Route::resource('species', VeisleController::class);
Route::get('editspec/{id}',[VeisleController::Class,'show']);
Route::put('editspec/{id}',[VeisleController::Class,'edit']); 



// Datatable
Route::get('datatable',[DisplayDataController::Class, 'show'])-> name('data.show');
Route::post('datatable', [DisplayDataController::class, 'destroy'])->name('delete.cattle');


 Route::get('specdatatable',[SPDataController::Class, 'show'])-> name('veisl.show');
 Route::post('specdatatable', [SPDataController::class, 'destroy'])->name('delete.veisl');

 Route::get('importdata', [ImportController::Class, 'index']);
 Route::post('cattle-import', [ImportController::Class, 'import'])->name('cattle.import');

 Route::get('/scan', [ScanController::Class, 'index']);

 Route::get('chart', [ChartController::class, 'index']);
 Route::get('chartsecond', [ChartSecondController::class, 'index']);
 

 Route::get('login', [AuthController::Class, 'index']);
 Route::post('post-login', [AuthController::Class, 'postlogin']);
 Route::get('login', [AuthController::Class, 'registration']);
 Route::post('post-registration', [AuthController::Class, 'postregistration']);
 Route::get('navbar', [AuthController::Class, 'dashboard']);
 Route::get('logout', [AuthController::Class, 'logout']);