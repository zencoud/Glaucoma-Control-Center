@props(['width' => 'w-full', 'height' => 'h-64', 'class' => ''])

<div class="image-skeleton {{ $width }} {{ $height }} {{ $class }} bg-gray-200 animate-pulse rounded">
    <div class="flex items-center justify-center h-full">
        <div class="text-gray-400">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
            </svg>
        </div>
    </div>
</div>
