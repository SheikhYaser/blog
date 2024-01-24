<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TalabaController;

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

// Start of BlogController //
Route::get('/', [BlogController::class, 'index'])->name('index');
Route::get('/about', [BlogController::class, 'about'])->name('about');
Route::get('/contact', [BlogController::class, 'contact'])->name('contact');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/servis', [BlogController::class, 'servis'])->name('servis');
Route::get('/shop', [BlogController::class, 'shop'])->name('shop');
// End of BlogController //

// Start of PostController //
Route::post('/post', [PostController::class, 'store'])->name('post.store');
// End of PostController //

// Start of TalabaController //
Route::get('/talaba', [TalabaController::class, 'index'])->name('talaba');
Route::get('/addtalaba', [TalabaController::class, 'addtalaba'])->name('addtalaba');
Route::post('/talaba', [TalabaController::class, 'store'])->name('talabastore');
Route::get('/show/{talaba}', [TalabaController::class, 'show'])->name('show');
Route::get('/edit/{talaba}', [TalabaController::class, 'edit'])->name('edit');
Route::post('/update/{talaba}', [TalabaController::class, 'update'])->name('update');
Route::delete('/delete/{talaba}', [TalabaController::class, 'delete'])->name('delete');
Route::get('/search', [TalabaController::class, 'search'])->name('search');
Route::post('add', [TalabaController::class, 'add'])->name('add');
// End of TalabaController //
