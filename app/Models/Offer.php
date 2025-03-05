<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Offer extends Model
{
    /** @use HasFactory<\Database\Factories\OfferFactory> */
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'price'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
