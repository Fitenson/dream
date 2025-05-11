{{-- @php
    $theme = config("dream.theme.button.$style", '');
    $classes = $theme['button'][$style] ?? $theme['button']['primary'];
@endphp --}}

<button {{ $attributes->merge(['class' => "px-4 py-2 font-medium rounded"]) }}>
    {{ $slot }}
</button>
