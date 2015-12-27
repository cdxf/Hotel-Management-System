<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->tinyInteger('role');  //0: receiption  1: director
             $table->tinyInteger('sex');   //0: nu      1: nam
            $table->string('phone', 60);
            $table->string('address',60);
            $table->date('birthday');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role')
                  ->references('id')->on('role')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
