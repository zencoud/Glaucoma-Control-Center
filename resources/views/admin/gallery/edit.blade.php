@extends('admin.layout')

@section('title', 'Editar Imagen')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Editar Imagen</h1>
    <p class="mt-1 text-sm text-gray-600">Modifica los detalles de la imagen</p>
</div>

<div class="bg-white shadow sm:rounded-lg">
    <form action="{{ route('admin.gallery.update', $gallery) }}" method="POST" enctype="multipart/form-data" class="space-y-6 p-6">
        @csrf
        @method('PUT')
        
        <x-input 
            name="title" 
            label="Título" 
            required 
            value="{{ old('title', $gallery->title) }}"
            error="{{ $errors->first('title') }}"
        />

        <x-input 
            name="description" 
            type="textarea" 
            label="Descripción" 
            rows="3"
            value="{{ old('description', $gallery->description) }}"
            error="{{ $errors->first('description') }}"
        />

        <x-image-preview 
            name="image" 
            label="Nueva Imagen (opcional)" 
            current-image="{{ $gallery->thumbnail_url }}"
            current-image-alt="{{ $gallery->title }}"
            error="{{ $errors->first('image') }}"
        />

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <x-input 
                name="sort_order" 
                type="number" 
                label="Orden de visualización" 
                min="0"
                value="{{ old('sort_order', $gallery->sort_order) }}"
                error="{{ $errors->first('sort_order') }}"
            />

            <div>
                <x-input 
                    name="is_active" 
                    type="checkbox" 
                    label="Imagen activa" 
                    value="1"
                    checked="{{ old('is_active', $gallery->is_active) }}"
                />
            </div>
        </div>

        <div class="flex justify-end space-x-3">
            <x-admin-button 
                as="a" 
                href="{{ route('admin.gallery.index') }}" 
                variant="secondary"
            >
                Cancelar
            </x-admin-button>
            
            <x-admin-button 
                type="submit" 
                variant="primary"
                icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15'></path>"
            >
                Actualizar Imagen
            </x-admin-button>
        </div>
    </form>
</div>
@endsection
