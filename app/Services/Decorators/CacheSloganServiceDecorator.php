<?php

namespace App\Services\Decorators;

use App\Contracts\Services\SloganServiceInterface;
use Illuminate\Support\Facades\Cache;

class CacheSloganServiceDecorator implements SloganServiceInterface
{
    private string $cacheKey;
    private int $cacheTtl;

    public function __construct(
        private readonly SloganServiceInterface $sloganService,
        ?int                                    $cacheTtl = null,
        ?string                                 $cacheKey = null
    )
    {
        $this->cacheTtl = $cacheTtl ?? config('cache.slogan.ttl', 60);
        $this->cacheKey = $cacheKey ?? config('cache.slogan.key', 'active_slogan_name');
    }

    public function getActiveSloganName(): ?string
    {
        return Cache::remember($this->cacheKey, now()->addMinutes($this->cacheTtl), function () {
            return $this->sloganService->getActiveSloganName();
        });
    }

    public function clearCache(): void
    {
        Cache::forget($this->cacheKey);
    }
}
