<?php

namespace App\Contracts\Services;

interface SloganServiceInterface
{
    public function getActiveSlogan(): ?string;
}
