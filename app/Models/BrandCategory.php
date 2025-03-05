<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand_Category extends Model
{
    /** @use HasFactory<\Database\Factories\BrandCategoryFactory> */
    use HasFactory;

    protected $fillable =[
        'brand_id',
        'category_id',
    ];
}
