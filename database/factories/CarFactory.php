<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
   protected $model = Car::class;
   public function definition()
   {
    return [
        'brand' => fake()->word,
        'horse_power' => fake()->numberBetween(100, 500),
        ];
   }
}
