<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'postal_code', 'prefecture_id', 'city',
        'address_line1', 'address_line2', 'phone_number',
        'is_default', 'is_selected',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function prefecture() {
        return $this->belongsTo(Prefecture::class);
    }

    public function cards() {
        return $this->hasMany(Card::class, 'billing_address_id');
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
