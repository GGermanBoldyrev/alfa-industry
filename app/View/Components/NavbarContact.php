<?php

namespace App\View\Components;

use App\Services\YandexMapsService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavbarContact extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public string $value
    ) {}

    /**
     * Генерация ссылки.
     */
    public function getLink(): string
    {
        return match ($this->type) {
            'Номер телефона' => 'tel:+' . preg_replace('/[^\d+]/', '', $this->value),
            'Email' => 'mailto:' . $this->value,
            'Адрес' => app(YandexMapsService::class)->generateUrl($this->value),
            default => '#',
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.small.navbar-contact');
    }
}
