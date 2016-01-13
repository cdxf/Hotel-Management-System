<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Guest;

class GuestController extends Controller
{
    
    public function listGuest()
    {
        $data['title'] = 'MANAGE GUEST';
        $data['guest'] = Guest::all();
        return view('default/listGuest',$data);
    }
    public function updateGuest(Request $request){
        $guest = new Guest;
        $guest = $request->except('_token');
        Guest::where('id',$guest['id'])->update($guest);
         return redirect()->route('listguest_com');
    }
   
}
