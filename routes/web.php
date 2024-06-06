<?php

use App\Http\Controllers\ComicController;
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
    return view('homepage');
});
//COMICS CRUD
//INDEX
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
//CREATE
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
//SHOW
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

//STORE
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//EDIT
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');

//UPDATE
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
