<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'brand_id'
    ];

    public function casts():array
    {
        return [
            'image' =>'array'
        ];
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function categories(): HasMany
    {
        return $this->hasMany(Category::class);
     }

     public function offer():BelongsTo
     {
       return $this->belongsTo(Offer::class);
     }


}
