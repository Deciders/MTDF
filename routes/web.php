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
//...............User Dashbord Controllers.............................//
Route::get('user/showDevice','UserController@showDevice');
Route::get('user/reservation','UserController@reservation');

//...................... If user redirect to user page...................//
Route::get('/home', 'HomeController@index')->name('home');

// Admin Register Routes

Route::post('admin/CoustomRegistation','AdminRegisterContoller@register');


Auth::routes();
//.............................Veryfy Registation with Email.................................................//

Route::get('verifyEmialFirst','Auth\RegisterController@verifyEmialFirst')->name('verifyEmialFirst');
Route::get('verify/{email}/{verifiyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');


//.........................Change Admin Password..........................................................//
Route::get('change/{email}/{verifiyToken}','AdminRegisterContoller@sendEmailDone')->name('changepass');



//reservations
Route::resource('reservation','reservationController');
//Route::get('/authname', 'reservationController@index');

Route::post('admin/deviceType/create','DeviceTypeController@createDeviceType');

// Admin DashBoard routes

Route::resource('admin','AdminController');
Route::post('admin/admin/device','AdminController@storedevice');
Route::post('admin/admin','AdminController@store');
<<<<<<< HEAD
// Redirect route for admin dashbord
=======
//Route::get('/admin/value/{id}','AdminController@value');

>>>>>>> abc3afd983115046a9cf1d8b62fc3d4118ac2904

Route::get('admin/admin/create', function () {

    return redirect('admin/create');
 });


Route::get('/deviceType/get','DeviceTypeController@getDeviceType');

//'''''''''''''''facebook login routes'''''''''''''''''''//
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');





Route::post('/admin/mychart','chartController@showChart');



// //Route::resource('admin/addAdmin','adddevicecontroller');
// Route::get('admin/admin/create', function () {
//
//    return view('Admin.addAdmin');
//    //return redirect('create');
// });
  
  // Route::post('admin/admin', function () {
  //   //return redirect view('Admin.addAdmin'); 
  //     return redirect('admin');
  // });
/*comment page*/


Route::get('/comments',function(){
return view('user.comments');
});

Route::post('/comment','CommentsController@store');