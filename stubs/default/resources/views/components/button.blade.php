@props([
    'style' => 'primary',
    'type' => 'submit',
    'to' => null,
])

@php
    $theme = config("dream.button.$style");
    $classes = "inline-flex items-center text-sm sm:text-base px-3 sm:px-4 py-2 sm:py-3 font-medium rounded $theme";
@endphp

@if($type === 'link' && !empty($to))
    <a href="{{ $to }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
