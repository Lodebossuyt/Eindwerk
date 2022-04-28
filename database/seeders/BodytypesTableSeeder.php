<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BodytypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bodytypes')->insert(['name'=>'sedan']);
        DB::table('bodytypes')->insert(['name'=>'SUV']);
        DB::table('bodytypes')->insert(['name'=>'Wagon']);
        DB::table('bodytypes')->insert(['name'=>'Crossover']);
        DB::table('bodytypes')->insert(['name'=>'Coupe']);
        DB::table('bodytypes')->insert(['name'=>'Pickup']);
        DB::table('bodytypes')->insert(['name'=>'Sport Coupe']);
        DB::table('bodytypes')->insert(['name'=>'Compact']);
        DB::table('bodytypes')->insert(['name'=>'Convertible']);
        DB::table('bodytypes')->insert(['name'=>'Family MPV']);
    }
}
