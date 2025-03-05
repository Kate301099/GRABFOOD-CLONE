<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Store extends Model
{
    /** @use HasFactory<\Database\Factories\StoreFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address',
        'brand_id',
    ];


    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function reviews():HasMany
    {
        return $this->hasMany(Review::class);
    }

}
