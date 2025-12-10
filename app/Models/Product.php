<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'management_number', 'category_id', 'price', 'shipping_method_id', 'stock', 'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function shippingMethod() {
        return $this->belongsTo(ShippingMethod::class);
    }

    public function images() {
        return $this->hasMany(ProductImage::class)->orderBy('order');
    }

    public function reviews() {
        return $this->hasMany(ProductReview::class);
    }

    public function favoritedBy() {
        return $this->belongsToMany(User::class, 'favorites', 'product_id', 'user_id')->withTimestamps();
    }

    public function cartItems() {
        return $this->hasMany(CartItem::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }

    public function guestOrderItems() {
        return $this->hasMany(GuestOrderItems::class);
    }
}
