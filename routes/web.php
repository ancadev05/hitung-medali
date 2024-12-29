<?php

use App\Http\Controllers\DataAtletController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MedaliController;
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

Route::get('/', function () {
    return redirect('/medali');
});

Route::resource('/medali', MedaliController::class);
Route::get('/get-data-atlet', [DataAtletController::class, 'dataAtlet']);

Route::get('/laporan', [LaporanController::class, 'laporan']);
Route::get('/atlet', [DataAtletController::class, 'atlet']);