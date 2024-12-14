<?php

namespace App\Services;

use App\Contracts\Repositories\SloganRepositoryInterface;
use App\Contracts\Services\SloganServiceInterface;

class SloganService implements SloganServiceInterface
{
    public function __construct(
        private readonly SloganRepositoryInterface $sloganRepository
    ) {}

    public function getActiveSloganName(): ?string
    {
        return $this->sloganRepository->getActiveSlogan()?->name;
    }
}
