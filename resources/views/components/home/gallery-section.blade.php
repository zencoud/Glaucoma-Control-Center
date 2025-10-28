@php
    $galleryImages = \App\Models\GalleryImage::active()->latest(3)->get();
@endphp

<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Nuestro Centro Médico</h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">Descubre nuestro espacio de trabajo, tecnología y el equipo que cuida de tu salud visual.</p>
        </div>
        
        @if($galleryImages->count() > 0)
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($galleryImages as $image)
                    <x-home-gallery-card :image="$image" />
                @endforeach
            </div>
            
            <div class="mt-12 text-center">
                <x-button href="/galeria" variant="primary">Ver galería completa</x-button>
            </div>
        @else
            <div class="mt-12">
                <x-gallery-empty />
            </div>
        @endif
    </div>
</div>
