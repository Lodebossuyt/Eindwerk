<?php

namespace Database\Factories;

use App\Models\Bodytype;
use App\Models\Brand;
use App\Models\Drivetrain;
use App\Models\Fueltype;
use App\Models\Transmission;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fakervehicle = (new \Faker\Factory())::create();
        $fakervehicle->addProvider(new \Faker\Provider\Fakecar($fakervehicle));


        $brands = Brand::all()->count();
        $drivetrains = Drivetrain::all()->count();
        $transmissions = Transmission::all()->count();
        $fueltypes = Fueltype::all()->count();
        $bodytypes = Bodytype::all()->count();

        /*$name = $fakervehicle->vehicle();
        $slug = Str::slug($name, '-');*/

        $name = $this->faker->unique()->sentence($nbwords = 2, $variableNbWords=true);
        $slug = Str::slug($name, '-');

        return [
            'name' => $name,
            'slug'=> $slug,
            'brand_id' => $this->faker->numberBetween($min = 1, $max = $brands),
            'drivetrain_id' => $this->faker->numberBetween($min = 1, $max = $drivetrains),
            'transmission_id' => $this->faker->numberBetween($min = 1, $max = $transmissions),
            'fueltype_id' => $this->faker->numberBetween($min = 1, $max = $fueltypes),
            'bodytype_id' => $this->faker->numberBetween($min = 1, $max = $bodytypes),
            'buildyear' => $this->faker->numberBetween($min = 1980, $max = 2022),
            'body' => $this->faker->realText($maxNbChars=190, $indexSize=2),
            'price' =>$this->faker->numberBetween($min = 8000, $max = 40000),
        ];
    }
}
