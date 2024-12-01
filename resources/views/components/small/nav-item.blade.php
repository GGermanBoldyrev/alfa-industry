<li class="mb-1">
    <a href="{{ $href }}"
       class="{{ Route::currentRouteName() === $routeName ? 'active-link' : ''}}">
        {{ $label }}
    </a>
</li>
