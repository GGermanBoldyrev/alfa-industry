<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\NewsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newsData = [
            [
                'title' => 'Запуск нового продукта от компании BestProm',
                'content' => 'Наша компания готова поставлять новое промышленное оборудование от компании BestProm.',
                'image' => null,
                'type' => 'Технологии',
                'is_active' => true,
            ],
            [
                'title' => 'Партнёрство с ближневосточным производителем',
                'content' => 'Мы заключили партнёрство для поставок оборудования с крупнейшим поставщиком из Китая.',
                'image' => null,
                'type' => 'Партнеры',
                'is_active' => true,
            ],
            [
                'title' => 'Обновление графика работы',
                'content' => 'С понедельника мы работаем с 8:00 до 18:00.',
                'image' => null,
                'type' => 'Компания',
                'is_active' => true,
            ],
        ];

        foreach ($newsData as $data) {
            $newsType = NewsType::firstOrCreate(['name' => $data['type']]);

            News::withTrashed()->updateOrCreate(
                [
                    'title' => $data['title'],
                    'news_type_id' => $newsType->id,
                ],
                [
                    'content' => $data['content'],
                    'image' => $data['image'],
                    'is_active' => $data['is_active'],
                ]
            );
        }
    }
}
