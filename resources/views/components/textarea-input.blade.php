@props([
    'name',
    'id' => null,
    'value' => '',
    'placeholder' => '',
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'rows' => 4,
    'error' => null,
    'label' => null,
    'help' => null,
    'class' => ''
])

@php
    $inputId = $id ?? $name;
    $baseClasses = 'block w-full text-base font-medium py-3 px-4 border rounded-md transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 resize-vertical';
    
    $variantClasses = [
        'default' => 'border-gray-300 bg-white text-gray-900 placeholder-gray-500 focus:ring-primary focus:border-primary hover:border-gray-400',
        'error' => 'border-red-500 bg-white text-gray-900 placeholder-red-400 focus:ring-red-500 focus:border-red-500',
        'disabled' => 'border-gray-300 bg-gray-50 text-gray-500 cursor-not-allowed',
        'readonly' => 'border-gray-300 bg-gray-50 text-gray-700',
    ];
    
    $inputClasses = $baseClasses;
    
    if ($error) {
        $inputClasses .= ' ' . $variantClasses['error'];
    } elseif ($disabled) {
        $inputClasses .= ' ' . $variantClasses['disabled'];
    } elseif ($readonly) {
        $inputClasses .= ' ' . $variantClasses['readonly'];
    } else {
        $inputClasses .= ' ' . $variantClasses['default'];
    }
    
    $inputClasses .= ' ' . $class;
@endphp

<div class="space-y-2">
    @if($label)
        <label for="{{ $inputId }}" class="block text-sm font-semibold text-gray-900">
            {{ $label }}
            @if($required)
                <span class="text-red-500 ml-1">*</span>
            @endif
        </label>
    @endif

    <textarea 
        name="{{ $name }}" 
        id="{{ $inputId }}" 
        rows="{{ $rows }}"
        @if($placeholder) placeholder="{{ $placeholder }}" @endif
        @if($required) required @endif
        @if($disabled) disabled @endif
        @if($readonly) readonly @endif
        class="{{ $inputClasses }}"
        {{ $attributes }}
    >{{ old($name, $value) }}</textarea>

    @if($help)
        <p class="text-sm text-gray-600 mt-1">{{ $help }}</p>
    @endif

    @if($error)
        <p class="text-sm text-red-600 mt-1 font-medium">{{ $error }}</p>
    @endif
</div>
