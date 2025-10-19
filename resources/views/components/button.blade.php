@props([
  'href' => null, // если передан — будет <a>, иначе <button>
])

@php
    $isLink = !empty($href);
    $baseClasses = 'button';
@endphp

@if ($isLink)
    <a href="{{ $href }}" {{ $attributes->class($baseClasses) }}>
        {{ $slot }}
    </a>
@else
    <button type="button" {{ $attributes->class($baseClasses) }}>
        {{ $slot }}
    </button>
@endif
