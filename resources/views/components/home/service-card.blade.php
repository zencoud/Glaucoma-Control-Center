@props(['title', 'description'])

<div class="p-6 bg-white">
    <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-none bg-primary text-white mx-auto">
        {{ $icon }}
    </div>
    <h3 class="mt-4 text-xl font-bold text-primary text-center">{{ $title }}</h3>
    <p class="mt-8 text-base text-gray-600 text-center">{{ $description }}</p>
</div>
