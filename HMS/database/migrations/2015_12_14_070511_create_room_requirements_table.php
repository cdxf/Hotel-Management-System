<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_requirements', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->string('desc');
			/*
			1 - integer
			2 - boolean
			3 - datestamp
			*/
			$table->tinyInteger('type');
			/*
			0  as no condtion (use for description);
			1  as ==
			2  as >
			3  as <
			12 as >=
			13 as <=
			*/
			$table->integer('condition');				
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('room_requirements');
    }
}
