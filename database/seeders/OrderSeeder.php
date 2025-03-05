<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customerIds = Customer::query()->pluck('id')->toArray();

        $storeIds = Store::query()->pluck('id')->toArray();
        shuffle($customerIds);
        shuffle($storeIds);

        Order::factory()->count(20)->create( function () use ($customerIds, $storeIds) {
            $randomCustomerId = $customerIds[array_rand($customerIds)];
            $randomStoreId = $storeIds[array_rand($storeIds)];
         return [
             'customer_id' => $randomCustomerId,
             'store_id' => $randomStoreId,
         ];
        }
        );
    }
}
