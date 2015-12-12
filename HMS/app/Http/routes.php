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
Route::get('/quanly', 'Director\ManageController@showDashboard')->name('show');

//Route::group(['as' => 'quanly::'], function(){
//    Route::get('/', 'Director\ManageController@showDashboard')->name('display');
//});