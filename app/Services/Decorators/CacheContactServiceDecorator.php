<?php

namespace App\Services\Decorators;

use App\Contracts\Services\ContactServiceInterface;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class CacheContactServiceDecorator implements ContactServiceInterface
{
    private string $cacheKey;
    private int $cacheTtl;

    public function __construct(
        private readonly ContactServiceInterface $contactService,
        ?int                                     $cacheTtl = null,
        ?string                                  $cacheKey = null
    )
    {
        $this->cacheTtl = $cacheTtl ?? config('cache.contacts.ttl', 60);
        $this->cacheKey = $cacheKey ?? config('cache.contacts.key', 'active_contacts_grouped_by_type');
    }

    public function getActiveContactsGroupedByType(): Collection
    {
        return Cache::remember($this->cacheKey,  $this->cacheTtl, function () {
            return $this->contactService->getActiveContactsGroupedByType();
        });
    }

    public function clearCache(): void
    {
        Cache::forget($this->cacheKey);
    }
}
