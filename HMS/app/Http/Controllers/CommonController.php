<?php

namespace App\Http\Controllers;


/**
* for common function between manage and reception
*/
class CommonController extends Controller
{
	public function listRoom(){

	}
	public function listUser(){
		//receipt chi duoc xem
		//manage co quyen xem xoa sua
		$data['title'] = "MANAGE USER";
		return view('default/listUser', $data);
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