<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listRoom(){
       $data['title'] = 'Manage Room';
        return view('default/listRoom', $data);
    }
    public function listRoomByIcon(){
        // hien thi danh sach phong bang icon
        $data['title'] = 'List Room By Icon';
        return view('default/listRoomByIcon', $data);

    }
    public function create()
    {
        //add new room
        $data['title'] = 'MANAGE ROOM';
        return view('manage/addroom', $data);
    }
    public function createRoomType(){
        $data['title'] = 'MANAGE ROOM - TYPE';
        return view('manage/addroomtype', $data);
    }

   
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
    public function show($id)
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
        //update a room
        
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
