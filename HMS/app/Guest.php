<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guests';
    protected $primaryKey = 'id';
    protected $fillable = ['name','identify','nationality','sex','phone', 'address','email'];
}
