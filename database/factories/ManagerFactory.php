<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manager>
 */
class ManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->name();
        $userName = strtolower(str_replace(' ','.',$name));

        return [
            'name' => $name,
            'email' => $userName . '@gmail.com',
            'email_verified_at' => now(),
            'phone'=>$this->faker->numerify('+84########'),
//            'password' => static::$password ??= Hash::make('password'),
            'password' => '111',
            'brand_id' =>fake(Brand::class),
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
