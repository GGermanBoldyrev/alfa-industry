<?php

namespace Database\Seeders;

use App\Models\NewsType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ['Компания', 'Партнеры', 'Технологии', 'События']; // Основные категории
        foreach ($types as $type) {
            NewsType::firstOrCreate(['name' => $type]);
        }
    }
}
