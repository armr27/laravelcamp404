<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController; 
use App\Http\Controllers\MenuController;

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

Route::resource('siswa', SiswaController::class);
Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/data-siswa', [MenuController::class, 'fsiswa']);
Route::get('/info', [MenuController::class, 'infosiswa']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
