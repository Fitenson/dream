<label for="{{ $for }}" {{ $attributes->merge([
    'block',
]) }}>
    {{ $slot }}
</label>
