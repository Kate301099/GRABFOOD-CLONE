<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    /** @use HasFactory<\Database\Factories\OrderItemFactory> */
    use HasFactory;

    protected $fillable = [
        'order_id',
        'offer_id',
        'quantity',
        'price',
        'total_price'
    ];


    public function offer():BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }


}
