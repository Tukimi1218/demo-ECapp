<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $regions = [
            '北海道', '北東北', '南東北', '関東', '信越', '北陸', '中部', '関西', '中国', '四国', '九州', '沖縄'
        ];

        foreach ($regions as $region) {
            Region::create(['name' => $region]);
        }
    }
}
