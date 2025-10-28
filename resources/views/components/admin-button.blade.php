@props([
    'variant' => 'primary',
    'size' => 'md',
    'icon' => null,
    'as' => 'button',
    'href' => null,
    'type' => 'button'
])

@php
    $baseClasses = 'inline-flex items-center justify-center font-medium rounded-md transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2';
    
    $sizeClasses = [
        'sm' => 'px-3 py-1.5 text-sm',
        'md' => 'px-4 py-2 text-sm',
        'lg' => 'px-6 py-3 text-base'
    ];
    
    $variantClasses = [
        'primary' => 'bg-primary text-white hover:bg-primary/90 focus:ring-primary shadow-sm',
        'secondary' => 'bg-gray-100 text-gray-700 hover:bg-gray-200 focus:ring-gray-500 border border-gray-300',
        'success' => 'bg-green-600 text-white hover:bg-green-700 focus:ring-green-500 shadow-sm',
        'warning' => 'bg-yellow-600 text-white hover:bg-yellow-700 focus:ring-yellow-500 shadow-sm',
        'danger' => 'bg-red-600 text-white hover:bg-red-700 focus:ring-red-500 shadow-sm',
        'outline' => 'bg-transparent text-gray-700 hover:bg-gray-50 focus:ring-gray-500 border border-gray-300',
        'ghost' => 'bg-transparent text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:ring-gray-500'
    ];
    
    $classes = $baseClasses . ' ' . $sizeClasses[$size] . ' ' . $variantClasses[$variant];
@endphp

@if ($as === 'a')
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        @if($icon)
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                {!! $icon !!}
            </svg>
        @endif
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => $type, 'class' => $classes]) }}>
        @if($icon)
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                {!! $icon !!}
            </svg>
        @endif
        {{ $slot }}
    </button>
@endif
