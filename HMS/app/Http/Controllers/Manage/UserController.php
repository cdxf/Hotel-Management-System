<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function listUser()
    {
        //list all user
        //receipt chi duoc xem
        //manage co quyen xem xoa sua
        $data['title'] = "MANAGE USER";
        $data['user'] = User::all();
        return view('default/listUser', $data);
    } 

    public function addUser()
    {
        //load page to add user
        //mat khau se tu render - sau do nguoi dung dang nhap va doi mat khau
        $data['title'] = 'ADD USER';
        $data['role_table'] = Role::all();
        return view('manage/adduser', $data);
    }
    public function addUserPost(Request $request){
        $user = new User;
        $user = $request->all();
        $user['password'] =  bcrypt('123');
        User::create($user);
        
        $data['title'] = "MANAGE USER";
        $data['user'] = User::all();
        return view('default/listUser',$data);
    }
    public function updateUser(){
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showprofile($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
