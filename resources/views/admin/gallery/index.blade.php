@extends('admin.layout')

@section('title', 'Galería')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Galería de Imágenes</h1>
        <p class="mt-1 text-sm text-gray-600">Gestiona las imágenes de la galería del sitio web</p>
    </div>
    <x-admin-button 
        as="a" 
        href="{{ route('admin.gallery.create') }}" 
        variant="primary"
        icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 6v6m0 0v6m0-6h6m-6 0H6'></path>"
    >
        Agregar Imagen
    </x-admin-button>
</div>

@if($images->count() > 0)
    <div class="bg-white shadow overflow-hidden sm:rounded-lg" x-data="sortableGallery()">
        <div class="px-4 py-3 bg-gray-50 border-b border-gray-200">
            <p class="text-sm text-gray-600">
                <span class="font-medium">{{ $images->count() }}</span> imágenes en la galería
                <span class="text-gray-400">•</span>
                Arrastra y suelta para reordenar
            </p>
        </div>
        
        <div class="divide-y divide-gray-200" id="sortable-gallery">
            @foreach($images as $image)
                <div class="px-4 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors duration-200" 
                     data-id="{{ $image->id }}"
                     draggable="true"
                     @dragstart="dragStart($event)"
                     @dragover="dragOver($event)"
                     @drop="drop($event)"
                     @dragend="dragEnd($event)">
                    
                    <!-- Drag Handle -->
                    <div class="flex-shrink-0 mr-4 cursor-move text-gray-400 hover:text-gray-600">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8h16M4 16h16"></path>
                        </svg>
                    </div>
                    
                    <!-- Image and Info -->
                    <div class="flex items-center flex-1">
                        <div class="flex-shrink-0 h-16 w-16">
                            <img class="h-16 w-16 rounded-lg object-cover shadow-sm" 
                                 src="{{ $image->thumbnail_url }}" 
                                 alt="{{ $image->title }}">
                        </div>
                        <div class="ml-4 flex-1">
                            <div class="text-sm font-medium text-gray-900">{{ $image->title }}</div>
                            @if($image->description)
                                <div class="text-sm text-gray-500">{{ Str::limit($image->description, 100) }}</div>
                            @endif
                            <div class="flex items-center mt-1 space-x-3">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $image->is_active ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ $image->is_active ? 'Activa' : 'Inactiva' }}
                                </span>
                                <span class="text-xs text-gray-500">Orden: {{ $image->sort_order }}</span>
                                <span class="text-xs text-gray-400">{{ $image->created_at->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex items-center space-x-2">
                        <x-admin-button 
                            as="a" 
                            href="{{ route('admin.gallery.edit', $image) }}" 
                            variant="ghost"
                            size="sm"
                            icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'></path>"
                        >
                            Editar
                        </x-admin-button>
                        
                        <form method="POST" action="{{ route('admin.gallery.destroy', $image) }}" 
                              class="inline" 
                              onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta imagen?')">
                            @csrf
                            @method('DELETE')
                            <x-admin-button 
                                type="submit" 
                                variant="danger"
                                size="sm"
                                icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16'></path>"
                            >
                                Eliminar
                            </x-admin-button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Save Order Button -->
        <div class="px-4 py-3 bg-gray-50 border-t border-gray-200" x-show="hasChanges">
            <div class="flex justify-between items-center">
                <p class="text-sm text-gray-600">Tienes cambios sin guardar</p>
                <x-admin-button 
                    @click="saveOrder()" 
                    variant="success"
                    icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 13l4 4L19 7'></path>"
                >
                    Guardar Orden
                </x-admin-button>
            </div>
        </div>
    </div>
@else
    <div class="text-center py-12">
        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
        <h3 class="mt-2 text-sm font-medium text-gray-900">No hay imágenes</h3>
        <p class="mt-1 text-sm text-gray-500">Comienza agregando tu primera imagen a la galería.</p>
        <div class="mt-6">
            <x-admin-button 
                as="a" 
                href="{{ route('admin.gallery.create') }}" 
                variant="primary"
                icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 6v6m0 0v6m0-6h6m-6 0H6'></path>"
            >
                Agregar Imagen
            </x-admin-button>
        </div>
    </div>
@endif

<script>
function sortableGallery() {
    return {
        draggedElement: null,
        hasChanges: false,
        originalOrder: [],
        
        init() {
            // Store original order
            this.originalOrder = Array.from(document.querySelectorAll('[data-id]')).map(el => el.dataset.id);
        },
        
        dragStart(event) {
            this.draggedElement = event.target.closest('[data-id]');
            event.target.closest('[data-id]').style.opacity = '0.5';
        },
        
        dragOver(event) {
            event.preventDefault();
        },
        
        drop(event) {
            event.preventDefault();
            const dropTarget = event.target.closest('[data-id]');
            
            if (this.draggedElement && dropTarget && this.draggedElement !== dropTarget) {
                const parent = this.draggedElement.parentNode;
                const nextSibling = dropTarget.nextSibling;
                
                parent.insertBefore(this.draggedElement, nextSibling);
                this.hasChanges = true;
            }
        },
        
        dragEnd(event) {
            event.target.closest('[data-id]').style.opacity = '1';
            this.draggedElement = null;
        },
        
        async saveOrder() {
            const elements = Array.from(document.querySelectorAll('[data-id]'));
            const newOrder = elements.map((el, index) => ({
                id: el.dataset.id,
                sort_order: index
            }));
            
            try {
                const response = await fetch('{{ route("admin.gallery.update-order") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({ order: newOrder })
                });
                
                if (response.ok) {
                    this.hasChanges = false;
                    this.originalOrder = newOrder.map(item => item.id);
                    
                    // Show success message
                    const successDiv = document.createElement('div');
                    successDiv.className = 'fixed top-4 right-4 bg-green-500 text-white px-4 py-2 rounded-md shadow-lg z-50';
                    successDiv.textContent = 'Orden guardado exitosamente';
                    document.body.appendChild(successDiv);
                    
                    setTimeout(() => {
                        successDiv.remove();
                    }, 3000);
                }
            } catch (error) {
                console.error('Error saving order:', error);
                alert('Error al guardar el orden');
            }
        }
    }
}
</script>
@endsection
