<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use User;
class ManageController extends Controller
{

    public function showDashboard(Request $request){
        if (Auth::check()){
            Session::forget('redirect_url');
            return view('manage/home',['user' => Auth::user()]);
        }
        else{
            Session::put('redirect_url',$request->path());
            return redirect()->route('login');
        }

    }
    
}
