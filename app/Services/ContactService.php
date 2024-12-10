<?php

namespace App\Services;

use App\Contracts\ContactServiceInterface;
use App\Repositories\ContactRepository;
use Illuminate\Support\Collection;

class ContactService implements ContactServiceInterface
{
    private ContactRepository $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function getActiveContactsGroupedByType(): Collection
    {
        return $this->contactRepository
            ->getActiveContacts()
            ->groupBy(fn($contact) => $contact->contactType->name);
    }
}
