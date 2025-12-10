<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products() {
        return $this->hasMany(Product::class);
    }

    public function regionShippingCosts() {
        return $this->hasMany(RegionShippingCost::class);
    }
}
