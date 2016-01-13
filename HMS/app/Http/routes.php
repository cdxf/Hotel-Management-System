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

    	Route::get('listguest', 'GuestController@listGuest')->name('listguest_com');
    	Route::post('updateguest', 'GuestController@updateGuest')->name('updateguest_com');

	    Route::get('listuser', 'UserController@listUser')->name('listuser_com');
	    Route::post('updateuser', 'UserController@updateUser')->name('updateuser_man');
	    Route::get('deleteuser/{id}', 'UserController@deleteUser')->name('deleteuser_man');


		Route::get('listroom', 'RoomController@listRoom')->name('listroom_com');
		Route::get('listroomtype', 'RoomController@listRoomType')->name('listroomtype_com');
		Route::match(array('GET', 'POST'), 'addroomtype', 'RoomController@createRoomType')->name('addroomtype_man');

		Route::get('listroombyicon', 'RoomController@listRoomByIcon')->name('listroombyicon_com');  

	    Route::get('adduser', 'UserController@addUser')->name('adduser_man');
	    Route::post('adduser', 'UserController@addUserPost')->name('O');

	    Route::post('addroom', 'RoomController@addRoom')->name('addroom_man');
	    Route::post('addroomtype', 'RoomController@addRoomType')->name('addroomtype_man');

	    

	    Route::get('updateuser', 'UserController@updateuser')->name('updateuser_man');
	    Route::post('updateroom', 'RoomController@updateRoom')->name('updateroom_man');
	    Route::post('updateroomtype', 'RoomController@updateRoomType')->name('updateroomtype_man');

	    Route::get('deleteroomtype/{id}', 'RoomController@deleteRoomType')->name('deleteroomtype_man');
	    Route::get('deleteroom/{id}', 'RoomController@deleteRoom')->name('deleteroom_man');


	    Route::get('listbooking', 'ServiceController@listBooking')->name('listbooking_com');
	    Route::get('bookingroom/{name}', 'ServiceController@bookingRoomGet')->name('bookingroom_rec_get');
	    Route::post('bookingroom', 'ServiceController@bookingRoomPost')->name('bookingroom_rec_post');

	    Route::get('checkout', 'ServiceController@checkout')->name('checkout_rec');
	    Route::get('checkoutpreview/{room}', 'CheckoutController@checkoutPreview')->name('checkoutpreview_rec');
	    Route::post('addcheckout', 'CheckoutController@addCheckout')->name('addcheckout_rec');


	});
	
});

