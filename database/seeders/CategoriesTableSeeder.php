<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'アニメグッズ', 'CD/DVD', 'ゲーム', '本・雑誌・漫画', '同人誌', '韓流グッズ', 'コスメ', 'ポスター', 'おもちゃ', 'ドール', 'フィギュア', 'パズル・ボードゲーム', 'トレーディングカード', 'ミニチュア', 'その他',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
