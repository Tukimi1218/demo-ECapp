<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'cardholder_name', 'stripe_payment_method_id', 'brand',
        'last4', 'expiry_month', 'expiry_year', 'is_default', 'is_selected',
        'billing_address_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function shippingAddress() {
        return $this->belongsTo(ShippingAddress::class, 'billing_address_id');
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
