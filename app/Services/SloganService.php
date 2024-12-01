<?php

namespace App\Services;

use App\Models\Slogan;
use Illuminate\Support\Facades\Cache;

class SloganService
{
    public function getActiveSlogan(): ?string
    {
        return Cache::remember('slogan', now()->addMinute(), function () {
            return Slogan::where('is_active', true)->first()?->name;
        });
    }
}
