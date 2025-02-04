<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    GenreController,
    CastController
};






Route::get('genre', [GenreController::class,'index'])->name('genre.index');
Route::get('genre/create', [GenreController::class,'create'])->name('genre.create');
Route::post('genre/submit', [GenreController::class,'submit'])->name('genre.submit');
Route::get('genre/edit/{id}', [GenreController::class, 'edit'])->name('genre.edit');
Route::put('genre/update/{id}', [GenreController::class, 'update'])->name('genre.update');
Route::delete('genre/delete/{id}', [GenreController::class, 'delete'])->name('genre.delete');


//route cast
Route::get('cast', [CastController::class,'index'])->name('cast.index');
Route::get('cast/create', [CastController::class,'create'])->name('cast.create');
Route::post('cast/submit', [CastController::class,'submit'])->name('cast.submit');
Route::get('cast/edit/{id}', [CastController::class, 'edit'])->name('cast.edit');
Route::post('cast/update/{id}', [CastController::class, 'update'])->name('cast.update');
Route::post('cast/delete/{id}', [CastController::class, 'delete'])->name('cast.delete');
