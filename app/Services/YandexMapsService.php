<?php

namespace App\Services;

class YandexMapsService
{
    private const string BASE_URL = 'https://maps.yandex.ru/maps/';
    public function generateUrl(string $address): string
    {
        return self::BASE_URL . urlencode(trim($address));
    }
}
