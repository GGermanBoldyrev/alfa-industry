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
        Slogan::create([
                'name' => 'Поставки промышленного оборудования мировых брендов',
                'is_active' => true
            ]);
    }
}
