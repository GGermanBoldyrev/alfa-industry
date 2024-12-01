<?php

namespace App\Services;

class YandexMapsService
{
    public function generateUrl(string $address): string
    {
        return 'https://yandex.ru/maps/?text=' . urlencode($address);
    }
}
