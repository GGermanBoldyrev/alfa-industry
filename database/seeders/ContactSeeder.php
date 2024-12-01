<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\ContactType;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Получаем ID типов контактов из базы данных
        $addressTypeId = ContactType::where('name', 'Адрес')->first()->id;
        $phoneTypeId = ContactType::where('name', 'Номер телефона')->first()->id;
        $emailTypeId = ContactType::where('name', 'Email')->first()->id;
        $workingHoursTypeId = ContactType::where('name', 'Режим работы')->first()->id;

        Contact::create([
            'contact_type_id' => $addressTypeId,
            'value' => '197372, город Санкт-Петербург, пр-кт Авиаконструкторов, д. 5 к. 2 литера А',
        ]);

        Contact::create([
            'contact_type_id' => $phoneTypeId,
            'value' => '8-911-183-55-93',
        ]);

        Contact::create([
            'contact_type_id' => $emailTypeId,
            'value' => 'boldyrev_german@mail.ru',
        ]);

        Contact::create([
            'contact_type_id' => $workingHoursTypeId,
            'value' => 'Пн-Пт с 8:00 до 18:00',
            'is_active' => true,
        ]);
    }
}
