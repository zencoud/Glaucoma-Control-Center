@props(['text', 'image'])

<div class="relative h-[100px] sm:h-[150px] md:h-[200px] bg-gray-800">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img class="w-full h-full object-cover" src="{{ $image }}" alt="Page Header Background">
        <div class="absolute inset-0 bg-gray-700 mix-blend-multiply opacity-60"></div>
    </div>

    <!-- Title Box -->
    <div class="relative h-full z-10 flex items-center justify-center ">
        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl m-6 font-extrabold tracking-tight text-white">{{ $text }}</h1>
    </div>
</div>
