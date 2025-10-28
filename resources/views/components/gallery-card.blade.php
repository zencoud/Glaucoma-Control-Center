@props(['image'])

<div class="bg-white">
    <div class="lazy-image-container w-full" data-src="{{ $image->thumbnail_url }}">
        <x-image-skeleton width="w-full" height="h-64" />
    </div>
    <div class="p-6">
        <h3 class="text-xl font-semibold text-primary">{{ $image->title }}</h3>
        @if($image->description)
            <p class="mt-2 text-gray-600">{{ Str::limit($image->description, 120) }}</p>
        @endif
    </div>
</div>