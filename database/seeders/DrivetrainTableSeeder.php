<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrivetrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drivetrains')->insert(['name' => 'AWD/4WD']);
        DB::table('drivetrains')->insert(['name' => 'Front wheel drive']);
        DB::table('drivetrains')->insert(['name' => 'Rear wheel drive']);
    }
}
