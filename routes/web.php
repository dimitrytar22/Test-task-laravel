<?php

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main');
Route::group(['prefix' => 'films', 'as' => 'films.'], function (){
    Route::get('/', [\App\Http\Controllers\FilmController::class,'index'])->name('index');
    Route::get('/create', [\App\Http\Controllers\FilmController::class,'create'])->name('create');
    Route::post('/', [\App\Http\Controllers\FilmController::class,'store'])->name('store');
    Route::get('/{film}', [\App\Http\Controllers\FilmController::class,'show'])->name('show');

    Route::get('/{film}/edit', [\App\Http\Controllers\FilmController::class,'edit'])->name('edit');
    Route::put('/{film}', [\App\Http\Controllers\FilmController::class,'update'])->name('update');
    Route::delete('/{film}', [\App\Http\Controllers\FilmController::class,'destroy'])->name('destroy');
});
