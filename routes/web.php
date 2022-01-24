<?php

use App\Http\Controllers\BookController;
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

Route::get('/create', [BookController::class, 'getCreateBook'])->name('getCreateBook');

Route::post('/create', [BookController::class, 'createBook'])->name('createBook');

Route::get('/get-books', [BookController::class, 'getBooks'])->name('getBooks');

Route::get('/update-book/{id}', [BookController::class, 'getBookById'])->name('getBookById');

Route::patch('/update-book/{id}', [BookController::class, 'updateBook'])->name('updateBook');

Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');

Route::get('/', [BookController::class, 'getHomePage'])->name('getHomePage');

Route::get('/search', [BookController::class, 'searchBooks'])->name('searchBooks');
