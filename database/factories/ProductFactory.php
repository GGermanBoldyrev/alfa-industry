<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Brand;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::query()->inRandomOrder()->first()->id ?? null, // Случайный тип оборудования
            'brand_id' => Brand::query()->inRandomOrder()->first()->id ?? null,       // Случайный бренд
            'name' => $this->faker->words(3, true),                                   // Генерация случайного названия
            'description' => $this->faker->paragraph(),                               // Генерация описания
            'specifications' => [
                'weight' => $this->faker->randomFloat(2, 0.5, 10) . ' kg',
                'power' => $this->faker->randomNumber(3) . ' W',
                'color' => $this->faker->safeColorName(),
            ],
            'price' => $this->faker->randomFloat(2, 1000, 50000),                     // Генерация цены
            'image' => 'products/product.jpg',
        ];
    }
}
