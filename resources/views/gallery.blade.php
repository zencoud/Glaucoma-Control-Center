@extends('layouts.app')

@section('title', 'Galería | Glaucoma Control Center')
@section('description', 'Conoce nuestro centro médico, tecnología y equipo especializado en el cuidado de tu salud visual.')

@section('content')
    <x-page-header
        text="Galería"
        :image="null"
    />

<!-- Gallery Section -->
<div class="bg-white" 
     x-data="{
         isOpen: false,
         currentIndex: 0,
         images: {{ json_encode($images->map(function($image) {
             return [
                 'id' => $image->id,
                 'title' => $image->title,
                 'description' => $image->description,
                 'image_url' => $image->image_url,
                 'thumbnail_url' => $image->thumbnail_url,
                 'is_active' => $image->is_active,
                 'sort_order' => $image->sort_order
             ];
         })) }},
         
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
         },
         
         get currentImage() {
             return this.images[this.currentIndex] || null;
         },
         
         handleKeydown(event) {
             if (!this.isOpen) return;
             
             if (event.key === 'Escape') {
                 this.closeModal();
             } else if (event.key === 'ArrowLeft') {
                 this.previousImage();
             } else if (event.key === 'ArrowRight') {
                 this.nextImage();
             }
         }
     }"
     @keydown="handleKeydown($event)">
    
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        @if($images->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($images as $index => $image)
                    <div class="group cursor-pointer" @click="openModal({{ $index }})">
                        <div class="bg-white overflow-hidden">
                            <img src="{{ $image->thumbnail_url }}" 
                                 alt="{{ $image->title }}" 
                                 class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
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
            <x-gallery-empty />
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
        
        <div class="relative flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!-- Background overlay -->
            <div class="fixed inset-0 bg-gray-900 bg-opacity-20 transition-opacity opacity-50" @click="closeModal()"></div>

            <!-- Modal panel -->
            <div class="relative inline-block align-bottom bg-white text-left overflow-hidden transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                <div class="bg-white px-2 pt-2 pb-2 sm:px-3 sm:pt-3 sm:pb-3">
                    <!-- Close button -->
                    <div class="flex justify-end mb-2">
                        <button @click="closeModal()" 
                                class="text-gray-400 hover:text-gray-600 focus:outline-none focus:text-gray-600 transition-colors duration-200">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Image -->
                    <div class="text-center">
                        <img :src="currentImage?.image_url" 
                             :alt="currentImage?.title"
                             class="max-w-full max-h-[70vh]">
                        
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold text-gray-900" x-text="currentImage?.title"></h3>
                            <p class="mt-2 text-lg text-gray-600" x-text="currentImage?.description"></p>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="mt-8 flex justify-between items-center">
                        <button @click="previousImage()" 
                                :disabled="currentIndex === 0"
                                :class="currentIndex === 0 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-100'"
                                class="flex items-center px-6 py-3 border border-gray-300 text-base font-medium text-gray-700 bg-white rounded-lg transition-colors duration-200">
                            <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                            Anterior
                        </button>

                        <span class="text-lg font-medium text-gray-500" x-text="`${currentIndex + 1} de ${images.length}`"></span>

                        <button @click="nextImage()" 
                                :disabled="currentIndex === images.length - 1"
                                :class="currentIndex === images.length - 1 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-100'"
                                class="flex items-center px-6 py-3 border border-gray-300 text-base font-medium text-gray-700 bg-white rounded-lg transition-colors duration-200">
                            Siguiente
                            <svg class="h-5 w-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection