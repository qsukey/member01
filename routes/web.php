<?php

use Illuminate\Support\Facades\Http;
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
    return view('welcome');
});

Route::get('/register', [App\Http\Controllers\Member01Controller::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Member01Controller::class, 'store'])->name('store');
Route::get('/top', [App\Http\Controllers\Member01Controller::class, 'top'])->name('top');
Route::get('/edit/{id}', [App\Http\Controllers\Member01Controller::class, 'edit'])->name('edit');
Route::put('/update/{id}', [App\Http\Controllers\Member01Controller::class, 'update'])->name('update');
Route::delete('/delete/{id}', [App\Http\Controllers\Member01Controller::class, 'destroy'])->name('delete');