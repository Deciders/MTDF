<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('auth/token','TokenController@auth');
Route::post('/deviceType/create','DeviceTypeController@createDeviceType');
Route::get('/deviceType/get','DeviceTypeController@getDeviceType');
Route::get('/deviceType/get/{id}','DeviceTypeController@findDeviceType');
Route::delete('/deviceType/delete/{id}','DeviceTypeController@deleteDeviceType');
Route::put('/deviceType/edit/{id}','DeviceTypeController@editDeviceType');
// for android login

Route::get('/login/user/{id}/pwd/{pass}','log@login');

//device controller apis
Route::resource('device','DeviceController');



//AwT authentication
Route::get('auth/token','TokenController@auth');
Route::get('auth/refresh','TokenController@refresh');
Route::get('auth/token/invalidate','TokenController@invalidate');

Route::get('/account','AccountController@index');

//Reservation Controll
Route::resource('reservation','reservationController');



