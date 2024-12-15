<?php

namespace Database\Seeders;

use App\Models\ContactType;
use Illuminate\Database\Seeder;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contactTypes = [
            ['name' => 'Адрес', 'is_active' => true],
            ['name' => 'Номер телефона', 'is_active' => true],
            ['name' => 'Email', 'is_active' => true],
            ['name' => 'Режим работы', 'is_active' => true],
        ];

        foreach ($contactTypes as $type) {
            ContactType::firstOrCreate(['name' => $type['name']], $type);
        }
    }
}
