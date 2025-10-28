@props([
    'type' => 'text',
    'name',
    'id' => null,
    'value' => '',
    'placeholder' => '',
    'required' => false,
    'disabled' => false,
    'readonly' => false,
    'rows' => 3,
    'accept' => null,
    'multiple' => false,
    'min' => null,
    'max' => null,
    'step' => null,
    'error' => null,
    'label' => null,
    'help' => null,
    'class' => ''
])

@php
    $inputId = $id ?? $name;
    $baseClasses = 'block w-full text-base font-medium py-3 px-4 border rounded-md transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2';
    
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
        <label for="{{ $inputId }}" class="block text-sm font-semibold text-gray-900 mb-2">
            {{ $label }}
            @if($required)
                <span class="text-red-500 ml-1">*</span>
            @endif
        </label>
    @endif

    @if($type === 'textarea')
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
    @elseif($type === 'file')
        <input 
            type="file" 
            name="{{ $name }}" 
            id="{{ $inputId }}"
            @if($accept) accept="{{ $accept }}" @endif
            @if($multiple) multiple @endif
            @if($required) required @endif
            @if($disabled) disabled @endif
            class="{{ $inputClasses }} file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-medium file:bg-primary file:text-white hover:file:bg-primary/90"
            {{ $attributes }}
        >
    @elseif($type === 'number')
        <input 
            type="number" 
            name="{{ $name }}" 
            id="{{ $inputId }}" 
            value="{{ old($name, $value) }}"
            @if($placeholder) placeholder="{{ $placeholder }}" @endif
            @if($min !== null) min="{{ $min }}" @endif
            @if($max !== null) max="{{ $max }}" @endif
            @if($step !== null) step="{{ $step }}" @endif
            @if($required) required @endif
            @if($disabled) disabled @endif
            @if($readonly) readonly @endif
            class="{{ $inputClasses }}"
            {{ $attributes }}
        >
    @elseif($type === 'checkbox')
        <div class="flex items-start">
            <input 
                type="checkbox" 
                name="{{ $name }}" 
                id="{{ $inputId }}" 
                value="1"
                @if(old($name, $value)) checked @endif
                @if($required) required @endif
                @if($disabled) disabled @endif
                class="h-5 w-5 text-primary focus:ring-primary border-gray-300 rounded transition-colors duration-200 mt-0.5"
                {{ $attributes }}
            >
            @if($label)
                <label for="{{ $inputId }}" class="ml-3 block text-sm font-medium text-gray-900">
                    {{ $label }}
                </label>
            @endif
        </div>
    @else
        <input 
            type="{{ $type }}" 
            name="{{ $name }}" 
            id="{{ $inputId }}" 
            value="{{ old($name, $value) }}"
            @if($placeholder) placeholder="{{ $placeholder }}" @endif
            @if($required) required @endif
            @if($disabled) disabled @endif
            @if($readonly) readonly @endif
            class="{{ $inputClasses }}"
            {{ $attributes }}
        >
    @endif

    @if($help)
        <p class="text-sm text-gray-600 mt-1">{{ $help }}</p>
    @endif

    @if($error)
        <p class="text-sm text-red-600 mt-1 font-medium">{{ $error }}</p>
    @endif
</div>
