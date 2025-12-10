<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'stripe_name', 'description'];

    protected static function booted()
    {
        static::created(function ($paymentMethod) {
            $users = \App\Models\User::all(); // すべてのユーザーを取得

            foreach ($users as $user) {
                \App\Models\UserPaymentMethod::create([
                    'user_id' => $user->id,
                    'payment_method_id' => $paymentMethod->id,
                    'is_default' => true,
                ]);
            }
        });
    }

    public function payments() {
        return $this->hasMany(Payment::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_payment_methods')
                    ->withPivot('is_default', 'is_selected')
                    ->withTimestamps();
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }

    public function userPaymentMethods() {
        return $this->hasMany(UserPaymentMethod::class);
    }
}
