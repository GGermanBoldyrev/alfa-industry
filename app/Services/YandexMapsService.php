<?php

namespace App\Services;

class YandexMapsService
{
    private const string BASE_URL = 'https://yandex.ru/maps/';

    public function generateUrl(string $address): string
    {
        return self::BASE_URL . '?text=' . urlencode(trim($address));
    }
}
