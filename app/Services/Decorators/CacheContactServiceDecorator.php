<?php

namespace App\Services\Decorators;

use App\Contracts\ContactServiceInterface;
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
        return Cache::remember($this->getCacheKey(),  $this->cacheTtl, function () {
            return $this->contactService->getActiveContactsGroupedByType();
        });
    }

    public function clearCache(): void
    {
        Cache::forget($this->getCacheKey());
    }

    private function getCacheKey(): string
    {
        return sprintf('%s:%s', $this->cacheKey, app()->getLocale());
    }
}
