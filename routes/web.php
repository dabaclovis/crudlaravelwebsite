<?php

use Illuminate\Support\Facades\Route;
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
