<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			//National Identity Number
			$table->string('identify')->unique();
            $table->string('nationality');
			$table->string('address')->nullable();
			$table->string('phone')->nullable();
			/* ISO/IEC 5218
			0 = not known,
			1 = male,
			2 = female
			*/
			$table->tinyInteger('sex');
			$table->string('email')->unique()->nullable();
            $table->timestamps();
			//index
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('guests');
    }
}
