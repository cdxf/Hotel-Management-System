<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('checkout', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('guest_id');
            $table->string('room_name');        
            $table->double('service_price');
            $table->double('total');
            $table->string('receiption');
            $table->timestamp('booking_time');
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
