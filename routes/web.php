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


Route::get('/views', 'ViewController@index')->name('view.index');
Route::post('/views', 'ViewController@store')->name('view.store');
Route::get('/views/{id}/edit', 'ViewController@edit')->name('view.edit');
Route::put('/views/{id}', 'ViewController@update')->name('view.update');
Route::delete('/views/{id}', 'ViewController@destroy')->name('view.destroy');
Route::get('/views/edit', function() {
    return view('views.edit');
});
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
