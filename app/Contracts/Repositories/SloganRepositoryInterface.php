<?php

namespace App\Contracts\Repositories;

use App\Models\Slogan;

interface SloganRepositoryInterface
{
    public function getActiveSlogan(): ?Slogan;
}
