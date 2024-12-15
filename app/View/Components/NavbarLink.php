<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class NavbarLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $href,
        public string $routeName,
        public string $label,
    ) {}

    /**
     * Проверяем активный ли текущий роут.
     */
    public function isActiveRoute(): bool
    {
        return str_starts_with(Route::currentRouteName(), $this->routeName);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-link');
    }
}
