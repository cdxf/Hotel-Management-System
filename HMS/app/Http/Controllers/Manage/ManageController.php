<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManageController extends Controller
{
    public function showDashboard(){
        return view('director/home');
    }
    public function addUser(){
		$data['title'] = 'ADD USER';
    	return view('director/adduser', $data);
    }
    public function addRoom(){
    	$data['title'] = 'ADD ROOM';
    	return view('director/addroom', $data);

    }
    public function addRoomType(){
    	$data['title'] = 'ADD ROOM - TYPE';
    	return view('director/addroomtype', $data);
    }
}
