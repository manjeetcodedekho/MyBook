<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BadgesController;
use App\Http\Controllers\BooksController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::view('/employee','admin.create');

//Author Routes
Route::get('authors', [AuthorsController::class, 'AuthorsView'])->name('add.authors');
Route::post('store', [AuthorsController::class, 'AuthorsStore'])->name('authors.store');
Route::get('show_authors', [AuthorsController::class, 'AuthorShow'])->name('show.authors');

//Route::resource('authors','AuthorsController');

//Badge Route
Route::get('badges', [BadgesController::class, 'BadgesView'])->name('add.badges');
Route::post('save', [BadgesController::class, 'SaveBadges'])->name('save.badges');
Route::get('show_badges', [BadgesController::class, 'BadgesShow'])->name('show.badges');

//Books
Route::get('books', [BooksController::class, 'BooksView'])->name('add.books');
Route::post('keep', [BooksController::class, 'KeepBook'])->name('keep.book');
Route::get('show_books', [BooksController::class, 'BookShow'])->name('show.book');
Route::get('/', [BooksController::class, 'BookDetails'])->name('book.details');

