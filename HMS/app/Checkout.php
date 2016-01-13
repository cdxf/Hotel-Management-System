<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table='checkout';
    protected $primaryKey = 'id';
    protected $fillable = ['guest_id', 'room_name','total','booking_time', 'receiption'];
}
