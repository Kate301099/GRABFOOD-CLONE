<?php

namespace Database\Factories;

use App\Models\Offer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $price = $this->faker->randomFloat(2, 1, 1000);
        $quantity = $this->faker->randomDigitNotNull();

        return [
            'order_id' => fake(Order::class),
            'offer_id'=>fake(Offer::class),
            'quantity'=>$quantity,
            'price'=>$price,
            'total_price'=> $this->faker->randomFloat(2, 1, 1000),
        ];
    }
}
