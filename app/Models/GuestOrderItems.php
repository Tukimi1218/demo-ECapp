<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestOrderItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'guest_order_id', 'product_id', 'quantity',
    ];

    public function guestOrder() {
        return $this->belongsTo(GuestOrder::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
