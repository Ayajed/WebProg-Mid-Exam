<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\PublisherController;
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

Route::get('/', [BookController::class, 'index']);
Route::get('/comedy', [BookController::class, 'getComedy']);
Route::get('/fantasy', [BookController::class, 'getFantasy']);
Route::get('/mystery', [BookController::class, 'getMystery']);
Route::get('/romance', [BookController::class, 'getRomance']);
Route::get('/book1', [BookController::class, 'getBook1Details']);
Route::get('/book2', [BookController::class, 'getBook2Details']);
Route::get('/book3', [BookController::class, 'getBook3Details']);
Route::get('/book4', [BookController::class, 'getBook4Details']);
Route::get('/publisher', [PublisherController::class, 'index']);
Route::get('/publisher1', [PublisherController::class, 'getPublisher1Details']);
Route::get('/publisher2', [PublisherController::class, 'getPublisher2Details']);
Route::get('/contact', function() {
    return view('contact');
});
