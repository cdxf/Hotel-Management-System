<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	//list all role
	protected $table = 'roles';

    public function getAll(){
    	return DB::get();
    }
}
