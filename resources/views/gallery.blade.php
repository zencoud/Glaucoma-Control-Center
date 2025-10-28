@extends('layouts.app')

@section('title', 'Galería | Glaucoma Control Center')
@section('description', 'Conoce nuestras instalaciones modernas y equipadas con la última tecnología para tu cuidado visual.')

@section('content')
<!-- Header Section -->
<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Galería de Instalaciones</h1>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">Contamos con un espacio moderno y confortable, equipado con la última tecnología para tu cuidado.</p>
        </div>
    </div>
</div>

<!-- Gallery Section -->
<div class="bg-white" x-data="galleryModal()">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        @if($images->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($images as $index => $image)
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
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <h3 class="mt-2 text-sm font-medium text-gray-900">No hay imágenes disponibles</h3>
                <p class="mt-1 text-sm text-gray-500">Pronto agregaremos imágenes de nuestras instalaciones.</p>
            </div>
        @endif
    </div>

    <!-- Modal -->
    <div x-show="isOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto"
         style="display: none;">
        
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="closeModal()"></div>

            <!-- Modal panel -->
            <div class="inline-block align-bottom bg-white text-left overflow-hidden transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <!-- Close button -->
                    <div class="flex justify-end mb-4">
                        <button @click="closeModal()" 
                                class="text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-600">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Image -->
                    <div class="text-center">
                        <img :src="currentImage?.image_url" 
                             :alt="currentImage?.title"
                             class="max-w-full max-h-96 mx-auto">
                        
                        <div class="mt-4">
                            <h3 class="text-lg font-semibold text-gray-900" x-text="currentImage?.title"></h3>
                            <p class="mt-2 text-sm text-gray-600" x-text="currentImage?.description"></p>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="mt-6 flex justify-between items-center">
                        <button @click="previousImage()" 
                                :disabled="currentIndex === 0"
                                :class="currentIndex === 0 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-100'"
                                class="flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Anterior
                        </button>

                        <span class="text-sm text-gray-500" x-text="`${currentIndex + 1} de ${images.length}`"></span>

                        <button @click="nextImage()" 
                                :disabled="currentIndex === images.length - 1"
                                :class="currentIndex === images.length - 1 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-100'"
                                class="flex items-center px-4 py-2 border border-gray-300 text-sm font-medium text-gray-700 bg-white">
                            Siguiente
                            <svg class="h-4 w-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function galleryModal() {
    return {
        isOpen: false,
        currentIndex: 0,
        images: @json($images->toArray()),
        
        get currentImage() {
            return this.images[this.currentIndex] || null;
        },
        
        openModal(index) {
            this.currentIndex = index;
            this.isOpen = true;
            document.body.style.overflow = 'hidden';
        },
        
        closeModal() {
            this.isOpen = false;
            document.body.style.overflow = 'auto';
        },
        
        nextImage() {
            if (this.currentIndex < this.images.length - 1) {
                this.currentIndex++;
            }
        },
        
        previousImage() {
            if (this.currentIndex > 0) {
                this.currentIndex--;
            }
        }
    }
}
</script>
@endsection
