@extends('admin.layout')

@section('title', 'Agregar Imagen')

@section('content')
<div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-900">Agregar Nueva Imagen</h1>
    <p class="mt-1 text-sm text-gray-600">Sube una nueva imagen para la galería</p>
</div>

<div class="bg-white shadow sm:rounded-lg">
    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 p-6">
        @csrf
        
        <x-input 
            name="title" 
            label="Título" 
            required 
            value="{{ old('title') }}"
            error="{{ $errors->first('title') }}"
        />

        <x-input 
            name="description" 
            type="textarea" 
            label="Descripción" 
            rows="3"
            value="{{ old('description') }}"
            error="{{ $errors->first('description') }}"
        />

        <x-image-preview 
            name="image" 
            label="Imagen" 
            required
            error="{{ $errors->first('image') }}"
        />

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
            <x-input 
                name="sort_order" 
                type="number" 
                label="Orden de visualización" 
                min="0"
                value="{{ old('sort_order', 0) }}"
                error="{{ $errors->first('sort_order') }}"
            />

            <div>
                <x-input 
                    name="is_active" 
                    type="checkbox" 
                    label="Imagen activa" 
                    value="1"
                    checked="{{ old('is_active', true) }}"
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
                icon="<path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 13l4 4L19 7'></path>"
            >
                Guardar Imagen
            </x-admin-button>
        </div>
    </form>
</div>
@endsection
