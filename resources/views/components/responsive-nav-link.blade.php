@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-amber-900 text-left text-base font-medium text-amber-900 bg-yellow-400 focus:outline-none focus:text-indigo-800'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-amber-900 hover:text-amber-900 hover:bg-yellow-300 hover:border-amber-800 focus:outline-none ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
