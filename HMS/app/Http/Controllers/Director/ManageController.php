<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManageController extends Controller
{
    public function showDashboard(){
        return view('director/home');
    }
    public function addUser(){

    }
    public function addRoom(){

    }
    public function addRoomType(){

    }
}
