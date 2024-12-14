<?php

namespace App\Services;

use App\Contracts\Repositories\ContactRepositoryInterface;
use App\Contracts\Services\ContactServiceInterface;
use Illuminate\Support\Collection;

class ContactService implements ContactServiceInterface
{
    public function __construct(
        private readonly ContactRepositoryInterface $contactRepository
    ) {}

    public function getActiveContactsGroupedByType(): Collection
    {
        return $this->contactRepository
            ->getActiveContacts()
            ->groupBy(fn($contact) => $contact->contactType->name);
    }
}
