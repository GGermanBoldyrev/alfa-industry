<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        // Перебираем категории и добавляем бренды
        foreach ($categories as $category) {
            Brand::factory()->count(6)->create([
                'category_id' => $category->id,
            ]);
        }
    }
}
