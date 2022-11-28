<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::post('/store', [\App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::any('/export/{id}', [\App\Http\Controllers\HomeController::class, 'export'])->name('export');


Route::get('/login', function () {
    return view('login');
})->name('login.form');

Route::post('login', [\App\Http\Controllers\HomeController::class, 'login'])->name('login.store');
Route::post('logout', [\App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


