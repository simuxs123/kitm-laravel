<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            ['role_name' => 'admin'],
            ['role_name' => 'darbuotojas'],
            ['role_name' => 'mokytojas'],
            ['role_name' => 'moksleivis']
        ]);
    }
}
