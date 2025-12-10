<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;
use App\Models\Prefecture;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prefectures = [
            ['name' => '北海道', 'region_id' => Region::where('name', '北海道')->first()->id],
            ['name' => '青森県', 'region_id' => Region::where('name', '北東北')->first()->id],
            ['name' => '秋田県', 'region_id' => Region::where('name', '北東北')->first()->id],
            ['name' => '岩手県', 'region_id' => Region::where('name', '北東北')->first()->id],
            ['name' => '宮城県', 'region_id' => Region::where('name', '南東北')->first()->id],
            ['name' => '山形県', 'region_id' => Region::where('name', '南東北')->first()->id],
            ['name' => '福島県', 'region_id' => Region::where('name', '南東北')->first()->id],
            ['name' => '茨城県', 'region_id' => Region::where('name', '関東')->first()->id],
            ['name' => '栃木県', 'region_id' => Region::where('name', '関東')->first()->id],
            ['name' => '群馬県', 'region_id' => Region::where('name', '関東')->first()->id],
            ['name' => '埼玉県', 'region_id' => Region::where('name', '関東')->first()->id],
            ['name' => '千葉県', 'region_id' => Region::where('name', '関東')->first()->id],
            ['name' => '神奈川県', 'region_id' => Region::where('name', '関東')->first()->id],
            ['name' => '東京都', 'region_id' => Region::where('name', '関東')->first()->id],
            ['name' => '山梨県', 'region_id' => Region::where('name', '関東')->first()->id],
            ['name' => '新潟県', 'region_id' => Region::where('name', '信越')->first()->id],
            ['name' => '長野県', 'region_id' => Region::where('name', '信越')->first()->id],
            ['name' => '静岡県', 'region_id' => Region::where('name', '中部')->first()->id],
            ['name' => '愛知県', 'region_id' => Region::where('name', '中部')->first()->id],
            ['name' => '三重県', 'region_id' => Region::where('name', '中部')->first()->id],
            ['name' => '岐阜県', 'region_id' => Region::where('name', '中部')->first()->id],
            ['name' => '富山県', 'region_id' => Region::where('name', '北陸')->first()->id],
            ['name' => '石川県', 'region_id' => Region::where('name', '北陸')->first()->id],
            ['name' => '福井県', 'region_id' => Region::where('name', '北陸')->first()->id],
            ['name' => '大阪府', 'region_id' => Region::where('name', '関西')->first()->id],
            ['name' => '京都府', 'region_id' => Region::where('name', '関西')->first()->id],
            ['name' => '滋賀県', 'region_id' => Region::where('name', '関西')->first()->id],
            ['name' => '奈良県', 'region_id' => Region::where('name', '関西')->first()->id],
            ['name' => '和歌山県', 'region_id' => Region::where('name', '関西')->first()->id],
            ['name' => '兵庫県', 'region_id' => Region::where('name', '関西')->first()->id],
            ['name' => '岡山県', 'region_id' => Region::where('name', '中国')->first()->id],
            ['name' => '広島県', 'region_id' => Region::where('name', '中国')->first()->id],
            ['name' => '山口県', 'region_id' => Region::where('name', '中国')->first()->id],
            ['name' => '鳥取県', 'region_id' => Region::where('name', '中国')->first()->id],
            ['name' => '島根県', 'region_id' => Region::where('name', '中国')->first()->id],
            ['name' => '香川県', 'region_id' => Region::where('name', '四国')->first()->id],
            ['name' => '徳島県', 'region_id' => Region::where('name', '四国')->first()->id],
            ['name' => '愛媛県', 'region_id' => Region::where('name', '四国')->first()->id],
            ['name' => '高知県', 'region_id' => Region::where('name', '四国')->first()->id],
            ['name' => '福岡県', 'region_id' => Region::where('name', '九州')->first()->id],
            ['name' => '佐賀県', 'region_id' => Region::where('name', '九州')->first()->id],
            ['name' => '長崎県', 'region_id' => Region::where('name', '九州')->first()->id],
            ['name' => '熊本県', 'region_id' => Region::where('name', '九州')->first()->id],
            ['name' => '大分県', 'region_id' => Region::where('name', '九州')->first()->id],
            ['name' => '宮崎県', 'region_id' => Region::where('name', '九州')->first()->id],
            ['name' => '鹿児島県', 'region_id' => Region::where('name', '九州')->first()->id],
            ['name' => '沖縄県', 'region_id' => Region::where('name', '沖縄')->first()->id], 
        ];

        foreach ($prefectures as $prefecture) {
            Prefecture::create($prefecture);
        }
    }
}
