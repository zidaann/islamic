<?php

use App\Http\Controllers\AlquranController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'index')->name('home');

Route::get('alquran', [AlquranController::class, 'index'])->name('quran.index');
Route::get('alquran/{nomor}', [AlquranController::class, 'show'])->name('quran.show');
