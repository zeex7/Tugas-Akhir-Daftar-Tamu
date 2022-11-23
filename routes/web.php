<?php

use App\Http\Controllers\TamuController;
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

Route::resource('/',TamuController::class);
Route::get('/{id:tamu}/hapus', [TamuController::class, 'hapus']);

Route::get('/login', function () {
    return view('login');
});

Route::get('dashboard', function () {
    return view('layouts.main');
});