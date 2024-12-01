<?php

namespace App\Providers;

use App\Services\ContactService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ContactComposerProvider extends ServiceProvider
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
    public function boot(ContactService $contactService): void
    {
        View::composer('*', function ($view) use ($contactService) {
            $view->with('activeContactsGroupedByType', $contactService->getActiveContactsGroupedByType());
        });
    }
}
