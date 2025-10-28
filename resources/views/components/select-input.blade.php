@props([
    'name',
    'id' => null,
    'value' => '',
    'required' => false,
    'disabled' => false,
    'error' => null,
    'label' => null,
    'help' => null,
    'class' => '',
    'options' => [],
    'placeholder' => 'Selecciona una opción'
])

@php
    $inputId = $id ?? $name;
    $baseClasses = 'block w-full text-base font-medium py-3 px-4 border rounded-md transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 appearance-none bg-white';
    
    $variantClasses = [
        'default' => 'border-gray-300 text-gray-900 focus:ring-primary focus:border-primary hover:border-gray-400',
        'error' => 'border-red-500 text-gray-900 focus:ring-red-500 focus:border-red-500',
        'disabled' => 'border-gray-300 bg-gray-50 text-gray-500 cursor-not-allowed',
    ];
    
    $inputClasses = $baseClasses;
    
    if ($error) {
        $inputClasses .= ' ' . $variantClasses['error'];
    } elseif ($disabled) {
        $inputClasses .= ' ' . $variantClasses['disabled'];
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

    <div class="relative">
        <select 
            name="{{ $name }}" 
            id="{{ $inputId }}"
            @if($required) required @endif
            @if($disabled) disabled @endif
            class="{{ $inputClasses }}"
            {{ $attributes }}
        >
            @if($placeholder)
                <option value="" disabled {{ old($name, $value) == '' ? 'selected' : '' }}>
                    {{ $placeholder }}
                </option>
            @endif
            
            @foreach($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}" {{ old($name, $value) == $optionValue ? 'selected' : '' }}>
                    {{ $optionLabel }}
                </option>
            @endforeach
        </select>
        
        <!-- Custom dropdown arrow -->
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>
    </div>

    @if($help)
        <p class="text-sm text-gray-600 mt-1">{{ $help }}</p>
    @endif

    @if($error)
        <p class="text-sm text-red-600 mt-1 font-medium">{{ $error }}</p>
    @endif
</div>
