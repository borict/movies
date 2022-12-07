<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\MoviesController;
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

Route::get('/', [MoviesController::class, 'index'])->name('all-movies');
Route::get('/movies/{id}', [MoviesController::class, 'show'])->name('single-movie');
Route::get('/create', [MoviesController::class, 'create']);
Route::post('/movies', [MoviesController::class, 'store']);


Route::post('/comments/add/{id}', [CommentsController::class, 'store']);

Route::get('/genres/{genre}', [GenresController::class, 'show'])->name('genre-movies');


