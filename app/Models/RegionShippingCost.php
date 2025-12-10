<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionShippingCost extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function shippingMethod() {
        return $this->belongsTo(ShippingMethod::class);
    }

    public function region() {
        return $this->belongsTo(Region::class);
    }
}
