@props(['title', 'description'])

<div class="p-6 bg-white">
    <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 bg-primary/10 text-primary mx-auto">
        {{ $icon }}
    </div>
    <h3 class="mt-6 text-xl font-bold text-gray-900 text-center">{{ $title }}</h3>
    <p class="mt-4 text-base text-gray-600 text-center leading-relaxed">{{ $description }}</p>
</div>
