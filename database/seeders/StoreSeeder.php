<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $brands = Brand::query()->pluck('id','name')->toArray();

        Store::factory()->count(5)->create( function () use ($brands) {
            $brandName = array_rand($brands);

            $branch =['cs1','cs2','cs3'];

            $brandNameWithBranch = $brandName . '-' . $branch[array_rand($branch)];

            return [
                'name'=>$brandNameWithBranch,
                'brand_id' =>$brands[$brandName],
            ];
        });
    }
}
