<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guest_id');
            $table->integer('room_id');
            $table->integer('child_number');
            $table->integer('adult_number');
            $table->double('deposit');
            $table->time('checkout');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
