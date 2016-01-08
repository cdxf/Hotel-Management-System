<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'email', 'password', 'role', 'sex', 'phone', 'address', 'birthday'];

}
