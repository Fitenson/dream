{{-- resources/views/components/tab-panel.blade.php --}}
@props(['default' => 'first'])

<div x-data="{ tab: '{{ $default }}' }" {{ $attributes }}>
    {{ $slot }}
</div>
