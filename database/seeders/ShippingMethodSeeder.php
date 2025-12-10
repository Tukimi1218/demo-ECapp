<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ShippingMethod;

class ShippingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $methods = ['ゆうメール', 'ネコポス', '宅急便'];

        foreach ($methods as $method) {
            ShippingMethod::create([
                'name' => $method,
            ]);
        }
    }
}
