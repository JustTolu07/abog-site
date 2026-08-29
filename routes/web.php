<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () { return view('pages.about'); })->name('about');

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/process', function () { return view('pages.process'); })->name('process');
Route::get('/projects', function () { return view('pages.projects'); })->name('projects');
Route::get('/collections', [App\Http\Controllers\CollectionController::class, 'index'])->name('collections');
Route::get('/collections/{category}', [App\Http\Controllers\CollectionController::class, 'showCategory'])->name('collections.category');
Route::get('/collections/{category}/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('collections.product');

