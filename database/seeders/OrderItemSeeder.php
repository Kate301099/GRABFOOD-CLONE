<?php

namespace Database\Seeders;

use App\Models\Offer;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderIds = Order::query()->pluck('id')->toArray();
        $offers = Offer::query()->pluck('price','id')->toArray();

        OrderItem::factory()->count(20)->create(function () use ($orderIds, $offers) {
            $randomOrderId = $orderIds[array_rand($orderIds)];

            $randomOfferId = array_rand($offers);
            $offerPrice = $offers[$randomOfferId];

            $price = fake()->randomFloat(2, 1, 1000);
            $quantity =fake()->randomDigitNotNull();

            $totalPrice = ($price * $quantity) + $offerPrice;

            return [
                'order_id' => $randomOrderId,
                'offer_id' => $randomOfferId,
                'total_price' => $totalPrice,
            ];
        });

    }
}
