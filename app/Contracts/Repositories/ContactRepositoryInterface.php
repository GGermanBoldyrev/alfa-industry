<?php

namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface ContactRepositoryInterface
{
    public function getActiveContacts(): Collection;
}
