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
        $contacts = $this->contactRepository->getActiveContacts();
        return $contacts->groupBy(function ($contact) {
            return $contact->contactType->name;
        });
    }
}
