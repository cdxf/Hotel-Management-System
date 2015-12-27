<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert([
            'name' => "director",
            'desc' => 'Nguoi quan li có the them xoa sua',
        ]);
         DB::table('roles')->insert([
            'name' => "receiption",
            'desc' => 'day la nguoi tiep tan chi dat phong',
        ]);
    }
}
