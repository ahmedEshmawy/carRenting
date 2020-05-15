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


//Front Routes
Route::get('/', 'frontend\appCtrl@index');
//Route::post('/', ('frontend\appCtrl@Store'));
Route::get('vehicle', 'frontend\appCtrl@vehicle');
Route::get('contact', 'frontend\appCtrl@contact');

//user registration
Route::get('user/register','frontend\registrationCtrl@index');
Route::post('user/register','frontend\registrationCtrl@store');


//user login
Route::get('/user/login','frontend\loginCtrl@index');
Route::post('/user/login','frontend\loginCtrl@store');

//user logout
Route::get('/user/logout','frontend\loginCtrl@logout');

//user profile
Route::get('/user/profile','frontend\userProfileCtrl@index');


#Backend
Route::prefix('admin')->group(function(){

    Route::middleware('auth:admin')->group(function(){

        Route::get('dashboard','backend\dashCtrl@dashboard');

         //Reservations
        Route::get('reservations','backend\bookingCtrl@index');
        Route::get('reservations/create','backend\bookingCtrl@Create');
        Route::post('reservations/create','backend\bookingCtrl@Store');
        // Route::get('reservations/edit/{reservation_id}',('backend\bookingCtrl@Edite'));
        // Route::post('reservations/edit/{reservation_id}',('backend\bookingCtrl@Update'));
        Route::post('reservations/destroy/{reservation_id}','backend\bookingCtrl@Destroy');

        //cars section


        Route::get('/cars','backend\carCtrl@cars');
        Route::get('/cars/create','backend\carCtrl@carsCreate');
        Route::post('/cars/create','backend\carCtrl@carsStore');
        Route::get('/cars/edit/{carid}','backend\carCtrl@carsEdite');
        Route::post('/cars/edit/{carid}','backend\carCtrl@carsUpdate');
        Route::post('/cars/destroy/{carid}','backend\carCtrl@carsDestroy');

        //users section

        Route::get('users','backend\userCtrl@index');
        Route::get('users/edit/{userid}','backend\userCtrl@Edite');
        Route::post('users/edit/{userid}','backend\userCtrl@Update');
        Route::post('users/destroy/{userid}','backend\userCtrl@Destroy');

        //drivers section

        Route::get('drivers/','backend\driverCtrl@index');
        Route::get('drivers/create','backend\driverCtrl@Create');
        Route::post('drivers/create','backend\driverCtrl@store');
        Route::get('drivers/edit/{driverid}','backend\driverCtrl@edite');
        Route::post('drivers/edit/{driverid}','backend\driverCtrl@Update');
        Route::post('drivers/destroy/{driverid}','backend\driverCtrl@Destroy');

    });


    //Admin Login
    Route::get('login','backend\AdminUserCtrl@index')->name('login');
    Route::post('login','backend\AdminUserCtrl@store');
    Route::get('logout','backend\AdminUserCtrl@logout');




});



