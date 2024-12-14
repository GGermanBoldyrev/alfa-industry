<?php

namespace App\View\Components;

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
            default => '#',
        };
    }

    /**
     * Генерация пути к иконке.
     */
    public function getIcon(): string
    {
        return match ($this->type) {
            'Номер телефона' => asset('icons/phone.svg'),
            'Email' => asset('icons/mail.svg'),
            default => asset('icons/default.svg'),
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
