@props([
    'title' => 'Nuestro Centro Médico',
    'subtitle' => 'Descubre nuestro espacio de trabajo, tecnología y el equipo que cuida de tu salud visual.',
    'limit' => 3,
    'showButton' => true,
    'buttonText' => 'Ver galería completa',
    'buttonHref' => '/galeria',
    'columns' => 'md:grid-cols-3',
    'background' => 'bg-white',
    'padding' => 'py-16'
])

@php
    $galleryImages = \App\Models\GalleryImage::active()->orderBy('order')->latest()->take($limit)->get();
@endphp

<div class="{{ $background }}">
    <div class="max-w-7xl mx-auto {{ $padding }} px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">{{ $title }}</h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">{{ $subtitle }}</p>
        </div>
        
        @if($galleryImages->count() > 0)
            <div class="mt-12 grid grid-cols-1 {{ $columns }} gap-8">
                @foreach($galleryImages as $image)
                    <x-gallery-card :image="$image" />
                @endforeach
            </div>
            
            @if($showButton)
                <div class="mt-12 text-center">
                    <x-button href="{{ $buttonHref }}" variant="primary">{{ $buttonText }}</x-button>
                </div>
            @endif
        @else
            <div class="mt-12">
                <x-gallery-empty />
            </div>
        @endif
    </div>
</div>






