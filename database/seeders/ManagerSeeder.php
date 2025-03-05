<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Manager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brandIds = Brand::query()->pluck('id')->toArray();

        // Ensure that the brand IDs are shuffled so they can be randomly assigned to the managers
        shuffle($brandIds);


        Manager::factory()->count(16)->create(function () use (&$brandIds) {
            $brandId = array_shift($brandIds);
           return  [
                'brand_id' => $brandId,
            ];
        }
        );
    }

}
