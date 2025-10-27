@props([
    'href',
    'variant' => 'primary',
    'as' => 'a'
])

@php
    $baseClasses = 'inline-block text-base font-medium py-4 px-8 rounded transition-colors duration-300';

    $variantClasses = [
        'primary' => 'bg-primary border border-primary text-white hover:bg-transparent hover:text-primary',
        'secondary' => 'bg-transparent border border-white text-white hover:bg-white hover:text-primary',
        'dark' => 'bg-transparent border border-gray-900 text-gray-900 hover:bg-gray-900 hover:text-white',
    ];

    $classes = $baseClasses . ' ' . $variantClasses[$variant];
@endphp

@if ($as === 'a')
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'submit', 'class' => $classes . ' w-full flex justify-center']) }}>
        {{ $slot }}
    </button>
@endif
