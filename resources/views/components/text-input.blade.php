@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 bg-yellow-100 focus:border-orange-900 focus:ring-orange-900 rounded-md shadow-sm']) !!}>
