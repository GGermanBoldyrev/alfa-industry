<?php

namespace App\Repositories;

use App\Contracts\Repositories\SloganRepositoryInterface;
use App\Models\Slogan;

class SloganRepository implements SloganRepositoryInterface
{
    /**
     * Получить активный слоган.
     */
    public function getActiveSlogan(): ?Slogan
    {
        return Slogan::query()
            ->where('is_active', true)
            ->first();
    }
}
