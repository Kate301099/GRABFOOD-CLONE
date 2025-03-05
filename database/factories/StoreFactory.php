<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


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
        $faker = Faker::create('vn_VN');

        return [
            'name' => fake(Brand::class),
            'address' => $faker->buildingNumber() . ' ' . $faker->streetName() . ', ' .  'Đà Nẵng',
            'phone'=>$this->faker->numerify('+84########'),
            'brand_id'=>fake(Brand::class),
        ];
    }
}
