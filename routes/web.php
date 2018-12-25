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
    return redirect()->route('threads.index');
});

// Route::view('/threads', 'threads/index')->name('threads');
// Route::view('/threads/show', 'threads/show')->name('threads.show');

Route::resource('threads', 'ThreadsController');
Route::post('threads/storeEntry', 'ThreadsController@storeEntry')->name("entries.store");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
