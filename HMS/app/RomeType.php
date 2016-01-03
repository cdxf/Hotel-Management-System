<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use RoomType;

class RomeType extends Model
{
    protected $table = 'room_types';
    protected $primaryKey = 'id';
    protected $fillable = ['name','desc','price'];
}
