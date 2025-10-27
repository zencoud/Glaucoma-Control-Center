@props(['text', 'image'])

<div class="relative h-64 bg-gray-800 mb-20">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="{{ $image }}" alt="Page Header Background">
        <div class="absolute inset-0 bg-gray-700 mix-blend-multiply opacity-60"></div>
    </div>

    <!-- Title Box -->
    <div class="absolute bottom-0 left-1/2 w-[70%] -translate-x-1/2 translate-y-1/2">
        <div class="bg-secondary rounded py-6 px-8">
            <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 text-center">{{ $text }}</h1>
        </div>
    </div>
</div>
