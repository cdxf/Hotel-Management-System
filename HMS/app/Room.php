<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	//B: busy, N: booked, A: avaiable
	protected $primaryKey = 'id';
    protected $fillable = ['name','desc','room_type_id','phone'];
    protected $table = 'rooms';

	public function room_type(){
		return $this->belongsTo('App\RoomType');
	}
}
