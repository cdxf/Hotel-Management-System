<?php

namespace App\Http\Controllers;


/**
* for common function between manage and reception
*/
class CommonController extends Controller
{
	public function listRoom(){
	   $data['title'] = 'Manage Room';
		return view('default/listRoom', $data);
	}
	public function listRoomByIcon(){
		// hien thi danh sach phong bang icon
		$data['title'] = 'List Room By Icon';
		return view('default/listRoomByIcon', $data);

	}
	public function listUser(){
		//receipt chi duoc xem
		//manage co quyen xem xoa sua
		$data['title'] = "MANAGE USER";
		return view('default/listUser', $data);
	}
	public function listGuest(){
		$data['title'] = "MANAGE GUEST";
		return view('default/listGuest', $data);
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