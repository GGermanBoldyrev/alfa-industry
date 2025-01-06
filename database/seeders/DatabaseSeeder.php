<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Запуск базовых seeder
        $this->call([
            SloganSeeder::class,
        ]);

        // Контакты
        $this->call([
            ContactTypeSeeder::class,
            ContactSeeder::class,
        ]);

        // Новости
        $this->call([
            NewsTypeSeeder::class,
            NewsSeeder::class,
        ]);

        // Категории
        $this->call([
            CategorySeeder::class,
        ]);

        // Бренды
        $this->call([
            BrandSeeder::class,
        ]);

        // Продукты 
        $this->call([
            ProductSeeder::class,
        ]);
    }
}
