<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
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

        return [
            'name'=> $fakervehicle->vehicleBrand(),
        ];
    }
}
