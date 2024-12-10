<?php

namespace App\View\Components;

use App\Services\YandexMapsService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $type,
        public string $value
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.small.contact-link');
    }

    public function getLink(): ?string
    {
        return match ($this->type) {
            'Email' => 'mailto:' . $this->value,
            'Номер телефона' => 'tel:+' . preg_replace('/[^\d+]/', '', $this->value),
            'Адрес' => app(YandexMapsService::class)->generateUrl($this->value),
            default => null,
        };
    }
}
