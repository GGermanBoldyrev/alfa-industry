<?php

namespace App\Repositories;

use App\Models\Contact;
use Illuminate\Support\Collection;

class ContactRepository
{
    public function getActiveContacts(): Collection
    {
        return Contact::query()
            ->where('is_active', true)
            ->whereHas('contactType', function ($query) {
                $query->where('is_active', true);
            })
            ->with(['contactType' => function ($query) {
                $query->where('is_active', true);
            }])
            ->get();
    }
}
