<?php

namespace Database\Seeders;

use App\Models\Brand_Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand_Category::factory()->count(10)->create();
    }
}
