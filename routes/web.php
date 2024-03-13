<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/news', function () {
    return view('news');
})->name('news');


Route::get('/comics/{index}', function ($index) {
    $comics = config('comics');
    $comic = $comics[$index];
    return view('comics.show', compact('comic'));
})->name('comic');

