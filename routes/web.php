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
    return view('reservation');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ReservationController@create')->name('reservations.create');
Route::post('/reservations', 'ReservationController@store')->name('reservations.store');
