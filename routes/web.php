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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//drivers routes
Route::get('/adddriver', 'DriverController@AddDriver');
Route::post('/adddriver', 'DriverController@AddDriver');

Route::get('/drivers', 'DriverController@ViewDrivers');
Route::get('/driver/{id}', 'DriverController@GetDriverById');

// Trips routes
Route::get('/addtrip', 'TripController@AddTrip');
Route::post('/addtrip', 'TripController@AddTrip');

Route::get('/trips', 'TripController@ViewTrips');
Route::get('/trip/{id}', 'TripController@GetTripById');

//TODO: this root will be removed because it should be at raspi side
Route::get('upload','DistractionController@index');
Route::post('upload/uploadFiles','DistractionController@multiple_upload');
