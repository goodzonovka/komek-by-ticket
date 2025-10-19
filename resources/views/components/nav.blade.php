@php

    $items = collect(config('links.nav_items'))->reject(
        fn($label, $routeName) => in_array($routeName, ['pushkins_map'])
    );

@endphp

<nav class="nav" id="nav">
    <ul>
        @foreach ($items as $routeName => $label)
            <li>
                <a href="{{ route($routeName) }}" class="{{ request()->routeIs($routeName) ? 'active' : '' }}">{{ $label }}</a>
            </li>
        @endforeach
    </ul>
</nav>
