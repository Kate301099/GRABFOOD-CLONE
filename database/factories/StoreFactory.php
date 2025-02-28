<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(Brand::all()->pluck('name')->toArray()) . '' .$this->faker->randomNumber(1,5),
            'address' => fake()->address(),
            'phone'=>fake()->phoneNumber(),
            'brand_id'=>fake()->numberBetween(1,10),
        ];
    }
}
