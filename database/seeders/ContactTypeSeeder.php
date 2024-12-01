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
        ContactType::create(['name' => 'Адрес', 'is_active' => true]);
        ContactType::create(['name' => 'Номер телефона', 'is_active' => true]);
        ContactType::create(['name' => 'Email', 'is_active' => true]);
        ContactType::create(['name' => 'Режим работы', 'is_active' => true]);
    }
}
