@php
    $galleryImages = \App\Models\GalleryImage::active()->latest(3)->get();
@endphp

<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Conoce nuestras instalaciones</h2>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">Contamos con un espacio moderno y confortable, equipado con la última tecnología para tu cuidado.</p>
        </div>
        
        @if($galleryImages->count() > 0)
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($galleryImages as $image)
                    <div class="bg-white">
                        <img src="{{ $image->thumbnail_url }}" 
                             alt="{{ $image->title }}" 
                             class="w-full h-64 object-cover">
                        <div class="p-6">
                            <h3 class="text-xl font-bold text-primary">{{ $image->title }}</h3>
                            @if($image->description)
                                <p class="mt-4 text-base text-gray-600">{{ Str::limit($image->description, 120) }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <!-- Fallback images when no gallery images exist -->
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white">
                    <img src="https://images.unsplash.com/photo-1612534260388-71b839003940?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="clinic-reception-area.jpg" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary">Recepción</h3>
                        <p class="mt-4 text-base text-gray-600">Un ambiente acogedor y profesional para recibirte.</p>
                    </div>
                </div>
                <div class="bg-white">
                    <img src="https://images.unsplash.com/photo-1579684385127-6c1d73494735?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="modern-medical-equipment.jpg" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary">Tecnología Avanzada</h3>
                        <p class="mt-4 text-base text-gray-600">Equipos de última generación para diagnósticos precisos.</p>
                    </div>
                </div>
                <div class="bg-white">
                    <img src="https://images.unsplash.com/photo-1631217872992-79CCA1459461?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="comfortable-waiting-room.jpg" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-primary">Sala de Espera</h3>
                        <p class="mt-4 text-base text-gray-600">Espacio cómodo y tranquilo para tu comodidad.</p>
                    </div>
                </div>
            </div>
        @endif
        
        <div class="mt-12 text-center">
            <x-button href="/galeria" variant="primary">Ver galería completa</x-button>
        </div>
    </div>
</div>
