<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
	public function room_type(){
		return $this->belongsTo('App\RoomType');
	}
}
