<?php

namespace App\Providers;

use App\Contracts\Repositories\ContactRepositoryInterface;
use App\Contracts\Services\ContactServiceInterface;
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
        // Регистрация репозитория
        $this->app->singleton(ContactRepositoryInterface::class, ContactRepository::class);

        // Базовый сервис
        $this->app->bind(ContactServiceInterface::class, function ($app) {
            $repository = $app->make(ContactRepositoryInterface::class);
            // Оборачиваем в декоратор
            return new CacheContactServiceDecorator(new ContactService($repository));
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
                'contacts.index',
            ],
            function ($view) use ($contactService) {
                $view->with('activeContacts', $contactService->getActiveContactsGroupedByType());
            });
    }
}
