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
    return view('welcome');
});
Route::get('/dashboard','Director\ManageController@showDashboard')->name('dashboard');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('login');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');



//Route::group(['as' => 'quanly::'], function(){
//    Route::get('/', 'Director\ManageController@showDashboard')->name('display');
//});