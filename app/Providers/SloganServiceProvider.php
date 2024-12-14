<?php

namespace App\Providers;

use App\Contracts\Repositories\SloganRepositoryInterface;
use App\Contracts\Services\SloganServiceInterface;
use App\Repositories\SloganRepository;
use App\Services\Decorators\CacheSloganServiceDecorator;
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
        // Регистрация репозитория
        $this->app->singleton(SloganRepositoryInterface::class, SloganRepository::class);

        // Базовый сервис
        $this->app->singleton(SloganServiceInterface::class, function ($app) {
            $repository = $app->make(SloganRepositoryInterface::class);
            // Оборачиваем в декоратор
            return new CacheSloganServiceDecorator(new SloganService($repository));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(SloganServiceInterface $sloganService): void
    {
        View::composer(
            ['components.large.footer', 'components.medium.navbar-top'],
            function ($view) use ($sloganService) {
                $view->with('activeSloganName', $sloganService->getActiveSloganName());
            });
    }
}
