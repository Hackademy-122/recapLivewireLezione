<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Livewire\CreateAlbum;

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

Route::get('/', [PublicController::class, 'home'])->name('homePage');

//Rotte per la gestione degli album
Route::get('/create/album', [AlbumController::class, 'create'])->name('album_create');
Route::get('/index/album', [AlbumController::class, 'index'])->name('album_index');
Route::get('/show/album/{album}', [AlbumController::class, 'show'])->name('album_show');
Route::get('/edit/album/{album}', [AlbumController::class, 'edit'])->name('album_edit');
Route::put('/update/album/{album}', [AlbumController::class, 'update'])->name('album_update');
Route::delete('/update/album/{album}', [AlbumController::class, 'destroy'])->name('album_delete');

