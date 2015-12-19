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
Route::get('/quanly', ['as' => 'login',function () {
    return view('auth/login');
}]);

// Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@authenticate');
Route::get('auth/logout', 'Auth\AuthController@getLogout');


Route::group(['namespace' => 'Manage'], function(){
    Route::get('/quanly', 'ManageController@showDashboard')->name('directorDashboard');
    Route::get('/quanly/quyen', 'ManageController@showDashboard')->name('directorDashboard1');
});

Route::group(['namespace' => 'Manage'], function(){

    Route::group(['prefix' => 'director'], function () {
	    Route::get('adduser', 'ManageController@addUser')->name('adduser_dir');
	    Route::get('addroom', 'ManageController@addRoom')->name('addroom_dir');
	    Route::get('updateuser', 'ManageController@addUser')->name('adduser_dir');
	    Route::get('updateroom', 'ManageController@addRoom')->name('addroom_dir');

	});
	
});

Route::group(['namespace' => 'Receiption'], function(){

 Route::group(['prefix' => 'receiption'], function () {

	  
	});

});

