<?php

namespace App\Http\Controllers\Director;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class ManageController extends Controller
{
    public function showDashboard(){
        if (Auth::check()){
            return view('director/home');
        }
        else{
            return redirect()->route('login');
        }
    }
    public function addUser(){

    }
    public function addRoom(){

    }
    public function addRoomType(){

    }
}
