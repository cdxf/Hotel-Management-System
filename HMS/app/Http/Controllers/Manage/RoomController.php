<?php

namespace App\Http\Controllers\Manage;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RoomType;
use App\Room;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listRoom(){

        $data['title'] = 'MANAGE ROOM';
        $data['room_type'] = RoomType::all();
        $data['room'] = Room::all();
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
        $data['room'] = Room::all();
        return view('default/listRoomByIcon', $data);

    }
    public function addRoom(Request $request)
    {
        //add new room
            $room = new Room;
            $room = $request->all();
            Room::create($room);   
            return redirect()->route('listroom_com');
    }
    public function addRoomType(Request $request){
            $roomtype = new RoomType;
            $roomtype = $request->all();
            RoomType::create($roomtype);
            return redirect()->route('listroomtype_com');     
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
