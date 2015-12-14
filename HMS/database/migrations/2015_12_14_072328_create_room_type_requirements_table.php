<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTypeRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_type_requirements', function (Blueprint $table) {
            $table->integer('room_type_id')->unsigned();
			$table->integer('requirement_id')->unsigned();
			$table->integer('value')->unsigned();
			$table->primary(array('room_type_id', 'requirement_id'));
			$table->foreign('room_type_id')->references('id')->on('room_types');
			$table->foreign('requirement_id')->references('id')->on('room_requirements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('room_type_requirements');
    }
}
