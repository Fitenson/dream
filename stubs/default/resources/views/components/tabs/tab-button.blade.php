@props(['name'])

<x-dream-button
    @click="tab = '{{ $name }}'"
    :class="{
        'border-b-2 border-blue-500 text-blue-500 font-semibold': tab === '{{ $name }}',
        'text-gray-600 hover:text-blue-500': tab !== '{{ $name }}'
    }"
    class="px-4 py-2 focus:outline-none transition-all duration-150"
    type="button"
>
    {{ $slot }}
</x-dream-button>
