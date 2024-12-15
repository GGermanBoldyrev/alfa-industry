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
        $contacts = [
            [
                'type' => 'Адрес',
                'value' => '197372, город Санкт-Петербург, пр-кт Авиаконструкторов, д. 5 к. 2 литера А',
                'is_active' => true,
            ],
            [
                'type' => 'Номер телефона',
                'value' => '8-911-183-55-93',
                'is_active' => true,
            ],
            [
                'type' => 'Email',
                'value' => 'boldyrev_german@mail.ru',
                'is_active' => true,
            ],
            [
                'type' => 'Режим работы',
                'value' => 'Пн-Пт с 8:00 до 18:00',
                'is_active' => true,
            ],
        ];

        foreach ($contacts as $contactData) {
            $contactType = ContactType::firstOrCreate(
                ['name' => $contactData['type']],
                ['is_active' => true]
            );

            Contact::withTrashed()->updateOrCreate(
                [
                    'contact_type_id' => $contactType->id,
                    'value' => $contactData['value'],
                ],
                [
                    'is_active' => $contactData['is_active'] ?? true,
                ]
            );
        }
    }
}
