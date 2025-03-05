<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
//        $faker = Faker::create('vi_VN');

        $name = $this->faker->name();
        $userName = strtolower(str_replace(' ','.',$name));
        return [
            'name' => $name,
            'email' => $userName . '@gmail.com',
            'email_verified_at' => now(),
            'birth_date'=>$this->faker->date(),
            'phone'=>$this->faker->numerify('+84########'),
//            'password' => static::$password ??= Hash::make('password'),
            'password' => '111',
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
