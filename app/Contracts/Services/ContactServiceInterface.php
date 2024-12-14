<?php

namespace App\Contracts\Services;

use Illuminate\Support\Collection;

interface ContactServiceInterface
{
    public function getActiveContactsGroupedByType(): Collection;
}
