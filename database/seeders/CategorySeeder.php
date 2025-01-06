<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Промышленные тормозные системы',
                'image' => '',
            ],
            [
                'name' => 'Электрические двигатели, мотор-редукторы',
                'image' => '',
            ],
            [
                'name' => 'Газовые пружины и гидравлические буферы',
                'image' => '',
            ],
            [
                'name' => 'Энкодеры',
                'image' => '',
            ],
            [
                'name' => 'Промышленные кондиционеры',
                'image' => '',
            ],
            [
                'name' => 'Передача крутящего момента',
                'image' => '',
            ],
            [
                'name' => 'Контроллеры, датчики',
                'image' => '',
            ],
            [
                'name' => 'Электрическое оборудование',
                'image' => '',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
