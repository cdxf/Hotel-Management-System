<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $primaryKey = 'id';
    protected  $table = 'booking';
    protected  $fillable = ['guest_id','room_name','child_number','adult_number','deposit','checkout'];
}
