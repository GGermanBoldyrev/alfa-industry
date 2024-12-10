<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

interface ContactServiceInterface
{
    public function getActiveContactsGroupedByType(): Collection;
}
