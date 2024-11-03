<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articles;
use Faker\Factory as Faker;
class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $title = [
            // 'Data Science'
            'Machine Learning',
            'Deep Learning',
            'Natural Language Processing',
            // 'Network security'
            'Software Security', 
            'Network Administration',
            'Popular Network Technology'
        ];
        for ($i = 0; $i < count($title); $i++) {
            Articles::create([
                'title' => $title[$i],
                'desc' => $faker->paragraph(rand(5,7)). "\n\n" .$faker->paragraph(rand(6,8)),
                'date' => $faker->date(),
                'cat_id' => $i<3 ? 1 : 2,
                'au_id' => $i<3 ? 1 : 2
            ]);
    }
}
}