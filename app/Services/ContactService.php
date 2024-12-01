<?php

namespace App\Services;

use App\Models\Contact;
use App\Models\ContactType;
use Illuminate\Support\Facades\Cache;

class ContactService
{
    public function getActiveContactsGroupedByType()
    {
        return Cache::remember('contacts_grouped_by_type', now()->addMinute(), function () {
            $contacts = Contact::where('is_active', true)
                ->with('contactType')
                ->get()
                ->groupBy('contact_type_id');

            $groupedContacts = [];
            foreach ($contacts as $typeId => $contactList) {
                $contactType = ContactType::find($typeId);
                if ($contactType && $contactType->is_active) {
                    $groupedContacts[$contactType->name] = $contactList;
                }
            }
            return $groupedContacts;
        });
    }
}
