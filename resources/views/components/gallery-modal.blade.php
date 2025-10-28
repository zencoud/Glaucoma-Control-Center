@props(['images'])

<!-- Modal -->
<div x-show="isOpen" 
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-200"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 z-50 overflow-y-auto">
    
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
