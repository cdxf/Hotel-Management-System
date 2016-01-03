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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::controller('/', 'Auth\AuthController');

// Route::get('/quanly', ['as' => 'login',function () {
//     return view('auth/login');
// }]);


// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin')->name('login_get');
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('login_post');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');



Route::group(['namespace' => 'Manage'], function(){
    Route::group(['prefix' => 'manage'], function () {


	    Route::get('listuser', 'UserController@listUser')->name('listuser_com');
		Route::get('listroom', 'RoomController@listRoom')->name('listroom_com');
		Route::get('listroomtype', 'RoomController@listRoomType')->name('listroomtype_com');
		Route::get('listbooking', 'ServiceController@listBooking')->name('listbooking_com');

		Route::get('listroombyicon', 'RoomController@listRoomByIcon')->name('listroombyicon_com');  

	    Route::get('adduser', 'UserController@addUser')->name('adduser_man');
	    Route::post('adduser', 'UserController@addUserPost')->name('adduser_man_post');

	    Route::get('addroom', 'RoomController@addRoom')->name('addroom_man');
	    

	    Route::get('updateuser', 'UserController@updateuser')->name('updateuser_man');
	    Route::get('updateroom', 'RoomController@updateRoom')->name('update_man');

	    Route::get('bookingroom', 'ServiceController@bookingRoom')->name('bookingroom_rec');
	});
	
});

