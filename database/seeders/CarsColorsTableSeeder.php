<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars = Car::all();
        $colors = Color::all();

        foreach($cars as $car) {
            if ($car->id == 1) {
                $car->colors()->attach($colors);
            }else{
                $car->colors()->attach($colors->random(rand(1,count($colors)))->pluck('id')->toArray()
                );
            }
        }
    }
}
