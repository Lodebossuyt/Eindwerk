<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FueltypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fueltypes')->insert(['name' => 'Diesel']);
        DB::table('fueltypes')->insert(['name' => 'Electric']);
        DB::table('fueltypes')->insert(['name' => 'Gasoline']);
        DB::table('fueltypes')->insert(['name' => 'Hybrid']);
        DB::table('fueltypes')->insert(['name' => 'Hydrogen']);
        DB::table('fueltypes')->insert(['name' => 'Plug-in-Hybrid']);
    }
}
