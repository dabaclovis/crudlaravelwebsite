<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;

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

Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('pages.index');
    Route::get('about', 'about')->name('pages.about');
    Route::get('contact', 'contact')->name('pages.contact');
});

Route::resource('articles', ArticleController::class);

Route::controller(PostController::class)->group(function(){
    Route::get('posts', 'index')->name('posts.index');
    Route::get('posts/create', 'create')->name('posts.create');
    Route::get('posts/{post}', 'show')->name('posts.show');
    Route::get('posts/{post}/edit', 'edit')->name('posts.edit');
    Route::post('posts/{post}', 'update')->name('posts.update');
    Route::post('store', 'create')->name('posts.store');
});
