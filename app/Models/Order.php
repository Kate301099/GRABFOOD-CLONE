<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'store_id',
    ];

    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }


    public function store():BelongsTo
    {
     return $this->belongsTo(Store::class);
    }

}
