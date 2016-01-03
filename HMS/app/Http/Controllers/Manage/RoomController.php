<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RoomType;
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
    public function listRoomType(){
        $data['title'] = 'Manage Room Type';
        $data['room_type'] = RoomType::all();
        return view('default/listRoomType', $data);
    }
    public function listRoomByIcon(){
        // hien thi danh sach phong bang icon
        $data['title'] = 'Room Preview';
        return view('default/listRoomByIcon', $data);

    }
    public function create(Request $request)
    {
        //add new room
        $data['title'] = 'MANAGE ROOM';
        return view('manage/addroom', $data);
    }
    public function createRoomType(Request $request){
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
