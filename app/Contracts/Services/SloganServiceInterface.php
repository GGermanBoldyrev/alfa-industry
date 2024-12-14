<?php

namespace App\Contracts\Services;

interface SloganServiceInterface
{
    public function getActiveSloganName(): ?string;
}
