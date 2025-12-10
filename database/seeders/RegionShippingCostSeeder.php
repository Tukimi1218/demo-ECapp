<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RegionShippingCost;
use App\Models\Region;
use App\Models\ShippingMethod;

class RegionShippingCostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $yuMail = ShippingMethod::where('name', 'ゆうメール')->first();
        $nekoPost = ShippingMethod::where('name', 'ネコポス')->first();
        $takkyubin = ShippingMethod::where('name', '宅急便')->first();

        $regions = Region::all();

        foreach ($regions as $region) {
            RegionShippingCost::create([
                'shipping_method_id' => $yuMail->id,
                'region_id' => $region->id,
                'cost' => 0,
            ]);

            RegionShippingCost::create([
                'shipping_method_id' => $nekoPost->id,
                'region_id' => $region->id,
                'cost' => 0,
            ]);

            $cost = match($region->name) {
                '北海道' => 2600,
                '北東北' => 2000,
                '南東北' => 2000,
                '関東' => 1700,
                '信越' => 1700,
                '北陸' => 1500,
                '中部' => 1500,
                '関西' => 1300,
                '中国' => 1200,
                '四国' => 1300,
                '九州' => 1200,
                '沖縄' => 1900,
            };

            RegionShippingCost::create([
                'shipping_method_id' => $takkyubin->id,
                'region_id' => $region->id,
                'cost' => $cost,
            ]);
        }
    }
}
