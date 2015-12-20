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

// Route::get('/quanly', ['as' => 'login',function () {
//     return view('auth/login');
// }]);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('login');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');


// Route::group(['namespace' => 'Manage'], function(){
//     Route::get('/quanly', 'ManageController@showDashboard')->name('directorDashboard');
//     Route::get('/quanly/quyen', 'ManageController@showDashboard')->name('directorDashboard1');
// });

Route::group(['namespace' => 'Manage'], function(){
    Route::group(['prefix' => 'manage'], function () {
	    Route::get('adduser', 'ManageController@addUser')->name('adduser_man');
	    Route::get('addroom', 'ManageController@addRoom')->name('addroom_man');
	    Route::get('addroomtype', 'ManageController@addRoomType')->name('addroomtype_man');
	    Route::get('updateuser', 'ManageController@addUser')->name('updateuser_man');
	    Route::get('updateroom', 'CommonController@addRoom')->name('update_man');
	});
	
});

Route::group(['namespace' => 'Receiption'], function(){
    Route::group(['prefix' => 'receiption'], function () {
    	 Route::get('checkin', 'ManageController@listUser')->name('checkin_rec');
	  
	});

});


	Route::group(['prefix' => 'quanly'], function () {
		Route::get('listuser', 'CommonController@listUser')->name('listuser_com');
		Route::get('listroom', 'CommonController@listRoom')->name('listroom_com');
		Route::get('listroombyicon', 'CommonController@listRoomByIcon')->name('listroombyicon_com');  
	});
