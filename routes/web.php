<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DiagnosaController;

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
    return view('welcome');
});

// Route::get('/back-office', [PagesController::class, 'index']);

Route::prefix('back-office')->group(function(){
    Route::controller(PagesController::class)->group(function(){
        Route::get('/', 'index');
        Route::fallback('notFound');
        Route::get('pasien/', 'pasien');
        Route::get('manajemen-diagnosa/', 'manajemenDiagnosa');
        Route::get('manajemen-obat/', 'manajemenObat');
    });
});

Route::resource('diagnosa', DiagnosaController::class);