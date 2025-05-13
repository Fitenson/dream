@props([
    'style' => 'primary', // default style
])

@php
    $theme = config("dream.button.$style");
@endphp

<button {{ $attributes->merge([
    'class' => "text-sm sm:text-base px-3 sm:px-4 py-2 sm:py-3 font-medium rounded $theme"
]) }}>
    {{ $slot }}
</button>
