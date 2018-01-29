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

Route::get('/start', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('Landing');
});
//Route::get('/device/create','DeviceController@createDevice');
//Route::get('/device_type/create', 'DeviceTypeController@createDeviceType');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//reservations
Route::resource('reservation','reservationController');
//Route::get('/authname', 'reservationController@index');