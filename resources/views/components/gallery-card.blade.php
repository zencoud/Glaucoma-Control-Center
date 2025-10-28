@props(['image', 'index'])

<div class="group cursor-pointer" @click="openModal({{ $index }})">
    <div class="bg-white">
        <img src="{{ $image->thumbnail_url }}" 
             alt="{{ $image->title }}" 
             class="w-full h-64 object-cover group-hover:opacity-90 transition-opacity duration-300">
        <div class="p-6">
            <h3 class="text-xl font-bold text-primary">{{ $image->title }}</h3>
            @if($image->description)
                <p class="mt-4 text-base text-gray-600">{{ Str::limit($image->description, 120) }}</p>
            @endif
        </div>
    </div>
</div>
