<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/kontak-kami', fn() => view('kontak-kami'))->name('kontak.kami');

Route::get('/kategori/{categoryName}', [ArticleController::class, 'byCategory'])->name('articles.byCategory');
Route::get('/artikel/{slug}', [ArticleController::class, 'show'])->name('articles.detail');
Route::get('/articles/search', [ArticleController::class, 'search'])->name('articles.search');


Route::post('/articles/{article}/rating', [App\Http\Controllers\RatingController::class, 'store'])
    ->name('articles.rating');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


