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

Route::post('/deviceType/create','DeviceTypeController@createDeviceType');
Route::get('/deviceType/get','DeviceTypeController@getDeviceType');
Route::get('/deviceType/get/{id}','DeviceTypeController@findDeviceType');
Route::delete('/deviceType/delete/{id}','DeviceTypeController@deleteDeviceType');
Route::put('/deviceType/edit/{id}','DeviceTypeController@editDeviceType');
// for android login

Route::get('/login/user/{id}/pwd/{pass}','log@login');

//device controller apis
Route::resource('device','DeviceController');
Route::resource('reservation','reservationController');