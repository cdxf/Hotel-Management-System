<?php

namespace App\Http\Controllers;


/**
* for common function between manage and reception
*/
class CommonController extends BaseController
{
	public function listRoom(){

	}
	public function listUser(){
		//receipt chi duoc xem
		//manage co quyen xem xoa sua
		
		return view('default/listUser');
	}
	public function listGuest(){
		
	}
	public function roomDeatail(){

	}
	public function userDetail(){

	}
	public function guestDetail(){

	}
	public function search(){

	}

}