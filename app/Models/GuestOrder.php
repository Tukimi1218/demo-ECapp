<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'session_id', 'order_number', 'product_total',
        'shipping_total', 'total', 'status', 'tracking_number',
        'note',
    ];

    public function guestOrderItems() {
        return $this->hasMany(GuestOrderItems::class);
    }
}
