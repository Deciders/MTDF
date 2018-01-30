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
    return view('clogin');
});
Route::get('/', function () {
    return view('Landing');
});

//Route::get('/device/create','DeviceController@createDevice');
//Route::get('/device_type/create', 'DeviceTypeController@createDeviceType');


Auth::routes();
//.............................Veryfy Registation with Email.................................................//

Route::get('verifyEmialFirst','Auth\RegisterController@verifyEmialFirst')->name('verifyEmialFirst');
Route::get('verify/{email}/{verifiyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('/home', 'HomeController@index')->name('home');

//reservations
Route::resource('reservation','reservationController');
//Route::get('/authname', 'reservationController@index');

Route::post('admin/deviceType/create','DeviceTypeController@createDeviceType');

// Admin DashBoard routes

Route::resource('admin','AdminController');
Route::post('admin/device','AdminController@storedevice');
Route::post('admin/admin','AdminController@store');



Route::get('/deviceType/get','DeviceTypeController@getDeviceType');



// //Route::resource('admin/addAdmin','adddevicecontroller');

// Route::get('admin/admin/addAdmin', function () {

//     //return redirect view('Admin.addAdmin'); 
//     return redirect('create');
// });
  
  // Route::post('admin/admin', function () {
  //   //return redirect view('Admin.addAdmin'); 
  //     return redirect('admin');
  // });