<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_locations', function (Blueprint $table) {
			$table->integer('room_id')->unsigned();
			$table->integer('floor')->unsigned();
			$table->integer('ceil')->unsigned();
			$table->primary('room_id');
			$table->unique(array('floor','ceil'));
			$table->foreign('room_id')->references('id')->on('rooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('room_locations');
    }
}
