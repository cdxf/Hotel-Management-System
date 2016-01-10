<?php

use Illuminate\Database\Seeder;

class RoomTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('room_types')->insert([
            'name' => "vip",
            'desc' => 'danh cho khach vip',
            'price' => '122323',
        ]);
    }
}
