<?php

namespace App\Providers;

use App\Services\SloganService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class SloganServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(SloganService $sloganService): void
    {
        View::composer('*', function ($view) use ($sloganService) {
            $view->with('slogan', $sloganService->getActiveSlogan());
        });
    }
}
