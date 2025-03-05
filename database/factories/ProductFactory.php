<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brandId = Brand::query()->inRandomOrder()->first()->id;

        $foods = [ 'Fried Chicken', 'Tuna Salad', 'Spaghetti Bolognese',
            'Vegetable Stir-fry',
            'Cheeseburger', 'Grilled Salmon', 'Chicken Alfredo', 'Beef Burritos',
            'Mushroom Risotto', 'Vegetarian Pizza', 'Chicken Caesar Salad',
            'BBQ Ribs', 'Fish Tacos', 'Lamb Chops', 'Pasta Primavera',
            'Caesar Salad', 'Greek Salad', 'Fruit Salad', 'Cobb Salad',
            'Pasta Salad', 'Potato Salad', 'Caprese Salad', 'Asian Noodle Salad',
            'Lemonade', 'Iced Tea', 'Smoothie', 'Milkshake', 'Fruit Juice',
            'Coffee', 'Iced Coffee', 'Sparkling Water', 'Soda', 'Mocktail'];


        $name = $this->faker->unique()->randomElement($foods);

        return [
            'name' => $name,
            'image'=>'product2.jpeg',
            'description' => fake()->text(),
            'brand_id'=>$brandId,
        ];
    }
}
