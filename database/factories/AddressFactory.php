<?php

namespace Database\Factories;

use App\Models\Customer;
use Faker\Provider\Address;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('vi_VN');
        $customerId = Customer::query()->inRandomOrder()->first()->id;

        return [
            'address' => $faker->buildingNumber() . ' ' . $faker->streetName() . ', ' .  'Đà Nẵng',
            'customer_id' => $customerId,
        ];
    }
}
