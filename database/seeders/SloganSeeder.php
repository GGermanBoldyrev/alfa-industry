<?php

namespace Database\Seeders;

use App\Models\Slogan;
use Illuminate\Database\Seeder;

class SloganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $slogans = [
            [
                'name' => 'Поставки промышленного оборудования мировых брендов',
                'is_active' => true,
            ],
            [
                'name' => 'Надежные комплектующие для вашего бизнеса',
                'is_active' => false,
            ],
        ];

        foreach ($slogans as $slogan) {
            Slogan::updateOrCreate(
                ['name' => $slogan['name']],
                $slogan
            );
        }
    }
}
