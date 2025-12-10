<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_number',
        'coupon_id',
        'product_total',
        'shipping_total',
        'total_amount',
        'status',
        'shipping_address_id',
        'payment_method_id',
        'card_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function shippingAddress() {
        return $this->belongsTo(ShippingAddress::class);
    }

    public function paymentMethod() {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function card() {
        return $this->belongsTo(Card::class);
    }

    public function getStatusLabelAttribute()
    {
        $statuses = [
            'pending'   => '保留中',
            'completed' => '完了',
            'cancelled' => 'キャンセル',
        ];

        return $statuses[$this->status] ?? '不明';
    }

    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }

    public function payment() {
        return $this->hasOne(Payment::class);
    }
}
