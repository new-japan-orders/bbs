<?php

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
    return view('threads/index');
});

// Route::view('/threads', 'threads/index')->name('threads');
// Route::view('/threads/show', 'threads/show')->name('threads.show');

Route::resource('threads', 'ThreadsController');