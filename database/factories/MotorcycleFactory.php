<?php

namespace Database\Factories;

use App\Models\Motorcycle;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorcycleFactory extends Factory
{
    protected $model = Motorcycle::class;

   public function definition()
   {
    return [
        'vehicle_model' => fake()->word,
        'engine_size'   => fake()->numberBetween(50, 200),
    ];
   }
}
