<?php

namespace App\Providers;

use App\Contracts\ContactServiceInterface;
use App\Repositories\ContactRepository;
use App\Services\ContactService;
use App\Services\Decorators\CacheContactServiceDecorator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(ContactServiceInterface::class, function ($app) {
            $repository = $app->make(ContactRepository::class);
            $baseService = new ContactService($repository);

            return new CacheContactServiceDecorator($baseService);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(ContactServiceInterface $contactService): void
    {
        View::composer(
            [
                'components.large.footer',
                'components.medium.navbar-top',
            ],
            function ($view) use ($contactService) {
                $view->with('activeContacts', $contactService->getActiveContactsGroupedByType());
            });
    }
}
