@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-semibold text-sm text-orange-900']) }}>
    {{ $value ?? $slot }}
</label>
