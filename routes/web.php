<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\layoutController;
use App\Http\Controllers\PenggunaController;

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
    return view('index');
});

Route::get('/dashboard', [LayoutController::class, 'dashboard']);
Route::get('/pengaduan', [LayoutController::class, 'pengaduan']);

Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::get('/pengguna/tambah', [PenggunaController::class, 'tambah']);
