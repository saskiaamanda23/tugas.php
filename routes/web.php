<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    GenreController,
    CastController
};

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


//route untuk menampilkan from genre
Route::get('/genre/create',[GenreController::class, 'create'])->name('genre.create');
Route::post('/genre', [GenreController::class,'store'])->name('genre.store');
Route::get('/genre', [GenreController::class, 'index'])->name('genre.index');
Route::get('/genre/{id}/edit', [GenreController::class, 'edit'])->name('genre.edit');
Route::put('/genre/{id}',[GenreController::class, 'update'])->name('genre.update');
Route::get('/genre/{id}', [GenreController::class, 'show'])->name('genre.show');
Route::delete('/genre/{id}', [GenreController::class, 'destroy'])->name('genre.delete');

//route casts

Route::get('/cast',[CastController::class, 'index'])->name('cast.index');
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');
Route::post('/cast', [CastController::class, 'store'])->name('cast.store');
Route::get('/cast/{id}/edit', [CastController::class, 'edit'])->name('cast.edit');
Route::put('/cast/{id}', [CastController::class, 'update'])->name('cast.update');
Route::delete('/cast/{id}', [CastController::class, 'destroy'])->name('cast.delete');
