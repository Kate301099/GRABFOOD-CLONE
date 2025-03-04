<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    /** @use HasFactory<\Database\Factories\ReviewFactory> */
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'store_id',
        'review'
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
