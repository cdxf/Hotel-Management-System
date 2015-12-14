<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('hello');
});
Route::get('/quanly', function () {
    return view('auth/login');
});
Route::get('/dashboard','Auth\AuthController@authenticate')->name('dashboard');
// Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@authenticate');
Route::get('auth/logout', 'Auth\AuthController@getLogout');



//Route::group(['as' => 'quanly::'], function(){
//    Route::get('/', 'Director\ManageController@showDashboard')->name('display');
//});