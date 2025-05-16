@props([
    'style' => 'primary',
    'type' => 'button',
    'to' => null,
    'variant' => 'solid',
])

@php
    // Base style from theme config (like colors)
    $theme = config("dream.button.$style") ?? '';

    // Define variant-specific classes
    $variantClasses = match($variant) {
        'outline' => 'bg-transparent border border-current text-current hover:bg-gray-100',
        'ghost' => 'bg-transparent text-current hover:bg-gray-100',
        'destructive' => 'bg-red-600 text-white hover:bg-red-700',
        'link' => 'bg-transparent underline text-blue-600 hover:text-blue-800 px-0 py-0',
        default => 'bg-current text-white hover:bg-opacity-90', // solid
    };

    // Combine base + variant classes + common classes
    $classes = trim("inline-flex items-center text-sm sm:text-base px-3 sm:px-4 py-2 sm:py-3 font-medium rounded $theme $variantClasses");
@endphp

@if($variant === 'link' && $to)
    <a href="{{ $to }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
