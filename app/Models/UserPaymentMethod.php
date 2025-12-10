<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'payment_method_id', 'is_default', 'is_selected',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function paymentMethod() {
        return $this->belongsTo(PaymentMethod::class);
    } 

    public function payments() {
        return $this->hasMany(Payment::class);
    }
}
