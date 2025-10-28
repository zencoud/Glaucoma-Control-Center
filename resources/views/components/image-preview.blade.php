@props([
    'name' => 'image',
    'label' => 'Imagen',
    'required' => true,
    'accept' => 'image/*',
    'help' => 'PNG, JPG, GIF hasta 10MB',
    'currentImage' => null,
    'currentImageAlt' => null
])

<div x-data="imagePreview('{{ $name }}')" class="space-y-2">
    <label class="block text-sm font-medium text-gray-700">
        {{ $label }}
        @if($required)
            <span class="text-red-500">*</span>
        @endif
    </label>
    
    <!-- File Input -->
    <div class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-gray-400 transition-colors duration-200">
        <div class="space-y-1 text-center">
            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <div class="flex text-sm text-gray-600">
                <label for="{{ $name }}" class="relative cursor-pointer bg-white rounded-md font-medium text-primary hover:text-primary/80 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-primary">
                    <span>Subir archivo</span>
                    <input 
                        id="{{ $name }}" 
                        name="{{ $name }}" 
                        type="file" 
                        accept="{{ $accept }}" 
                        @if($required) required @endif
                        @change="handleFileSelect($event)"
                        class="sr-only"
                    >
                </label>
                <p class="pl-1">o arrastra y suelta</p>
            </div>
            <p class="text-xs text-gray-500">{{ $help }}</p>
        </div>
    </div>
    
    <!-- Current Image (for edit forms) -->
    @if($currentImage)
        <div class="mt-4">
            <p class="text-sm font-medium text-gray-700 mb-2">Imagen actual:</p>
            <div class="flex items-center space-x-4">
                <img src="{{ $currentImage }}" alt="{{ $currentImageAlt }}" class="h-24 w-24 rounded-lg object-cover">
                <div>
                    <p class="text-sm text-gray-600">Sube una nueva imagen para reemplazarla</p>
                </div>
            </div>
        </div>
    @endif
    
    <!-- Preview -->
    <div x-show="previewUrl" x-transition class="mt-4">
        <p class="text-sm font-medium text-gray-700 mb-2">Vista previa:</p>
        <div class="flex items-center space-x-4">
            <img :src="previewUrl" alt="Preview" class="h-24 w-24 rounded-lg object-cover">
            <div>
                <p class="text-sm text-gray-600" x-text="fileName"></p>
                <button type="button" @click="clearPreview" class="text-sm text-red-600 hover:text-red-800">
                    Eliminar
                </button>
            </div>
        </div>
    </div>
    
    @error($name)
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<script>
function imagePreview(inputName) {
    return {
        previewUrl: null,
        fileName: null,
        
        handleFileSelect(event) {
            const file = event.target.files[0];
            if (file) {
                this.fileName = file.name;
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.previewUrl = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        },
        
        clearPreview() {
            this.previewUrl = null;
            this.fileName = null;
            document.getElementById(inputName).value = '';
        }
    }
}
</script>
