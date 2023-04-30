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

/* Rota Default
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/users/adicionar',[\App\Http\Controllers\HomeController::class,'create'])->name('user.create');
Route::post('/users/adicionar',[\App\Http\Controllers\HomeController::class,'store'])->name('user.store');
Route::get('/users',[\App\Http\Controllers\HomeController::class, 'index'])->name('user.index');
Route::get('/users/{id}',[\App\Http\Controllers\HomeController::class, 'show'])->name('user.show');
Route::get('/users/edit/{id}',[\App\Http\Controllers\HomeController::class,'edit'])->name('user.edit');
Route::put('/users/update/{id}',[\App\Http\Controllers\HomeController::class,'update'])->name('user.update');
Route::delete('/users/delete/{id}',[\App\Http\Controllers\HomeController::class,'destroy'])->name('user.destroy');