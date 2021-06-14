<?php

use App\Traffics;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrafficSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Traffics::create(['visitor' => 0]);
    }
}
