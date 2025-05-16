@props([
    'variant' => 'primary', // primary, outline, ghost
    'padding' => 'p-4',
    'shadow' => 'shadow-sm',
    'rounded' => 'rounded-lg',
])

@php
    $baseClasses = "$padding $shadow $rounded";

    $variantClasses = match ($variant) {
        'primary' => 'bg-white border border-gray-200',
        'outline' => 'bg-transparent border border-gray-300',
        'ghost' => 'bg-transparent border-none shadow-none',
        default => 'bg-white border border-gray-200',
    };
@endphp

<div {{ $attributes->merge([
    'class' => "$baseClasses $variantClasses",
]) }}>
    {{ $slot }}
</div>
