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
use App\Http\Controllers\RecordController;
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
Route::get('edit/{id}',[CattleController::class,'show']);      
Route::put('edit/{id}',[CattleController::class,'edit']);   

// Veisles 
Route::resource('species', VeisleController::class);
Route::get('editspec/{id}',[VeisleController::class,'show']);
Route::put('editspec/{id}',[VeisleController::class,'edit']); 



// Datatable
Route::get('datatable',[DisplayDataController::class, 'show'])-> name('data.show');
Route::post('datatable', [DisplayDataController::class, 'destroy'])->name('delete.cattle');
 

 Route::get('specdatatable',[SPDataController::class, 'show'])-> name('veisl.show');
 Route::post('specdatatable', [SPDataController::class, 'destroy'])->name('delete.veisl');

 Route::get('importdata', [ImportController::class, 'index']);
 Route::post('cattle-import', [ImportController::class, 'import'])->name('cattle.import');

Route::get('/scan', [ScanController::class, 'index']);
//  Route::post('/scan/upload', [ScanController::Class, 'upload'])->name('image.upload');

 Route::get('chart', [ChartController::class, 'index']);
 

 Route::get('login', [AuthController::class, 'index']);
 Route::post('post-login', [AuthController::class, 'postlogin']);
 Route::get('login', [AuthController::class, 'registration']);
 Route::post('post-registration', [AuthController::class, 'postregistration']);
 Route::get('navbar', [AuthController::class, 'dashboard']);
 Route::get('logout', [AuthController::class, 'logout']);

 Route::resource('/check', RecordController::class);