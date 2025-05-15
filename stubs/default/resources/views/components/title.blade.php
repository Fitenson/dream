@props(['level' => 2])

@php
    $tag = 'h' . $level;
@endphp

<{{ $tag }} {{ $attributes->merge(['class' => 'text-gray-900 font-bold leading-tight']) }}>
    {{ $slot }}
</{{ $tag }}>
