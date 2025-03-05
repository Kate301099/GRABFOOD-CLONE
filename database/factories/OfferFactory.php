<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productIds = Product::query()->pluck('id')->toArray();

        shuffle($productIds);

        $offers = [
            'spicy', 'no spicy', 'size M' ,'size L' ,'size XL' ,'size XXL', 'with cream','no cream'
        ];

        $name = $this->faker->randomElement($offers);

        return [
            'product_id' => $productIds[0],
            'name' =>$name,
            'price'=>$this->faker->randomFloat(2,0,1000),
        ];
    }
}
