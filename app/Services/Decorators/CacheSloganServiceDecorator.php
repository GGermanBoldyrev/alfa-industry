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
        $this->cacheKey = $cacheKey ?? config('cache.slogan.key', 'active_slogan');
    }

    public function getActiveSlogan(): ?string
    {
        return Cache::remember($this->cacheKey, $this->cacheTtl, function () {
            return $this->sloganService->getActiveSlogan();
        });
    }

    public function clearCache(): void
    {
        Cache::forget($this->cacheKey);
    }
}
