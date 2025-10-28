@props(['image'])

<div class="bg-white">
    <img src="{{ $image->thumbnail_url }}" 
         alt="{{ $image->title }}" 
         class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
    <div class="p-6">
        <h3 class="text-xl font-semibold text-primary">{{ $image->title }}</h3>
        @if($image->description)
            <p class="mt-2 text-gray-600">{{ Str::limit($image->description, 120) }}</p>
        @endif
    </div>
</div>