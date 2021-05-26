<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kitm_users')->insert([
            [
            'email' => 'simonas.paulius@stud.kitm.lt',
            'roles_id'=>2
        ],
            [
                'email' => 'paulius.simonas@gmail.com',
                'roles_id'=>3
            ] ]);
    }
}
