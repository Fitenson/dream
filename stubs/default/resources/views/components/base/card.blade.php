@props([
    'padding' => 'p-4',
    'shadow' => 'shadow-sm',
    'rounded' => 'rounded',
    'border' => 'border border-gray-200',
    'background' => 'bg-white',
])

<div {{ $attributes->merge([
    'class' => "$padding $shadow $rounded $border $background",
]) }}>
    {{ $slot }}
</div>
