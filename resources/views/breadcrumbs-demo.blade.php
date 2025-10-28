@extends('layouts.app')

@section('title', 'Demostración de Breadcrumbs')

@section('content')
    <!-- Estilo Primary -->
    <x-page-header
        text="Estilo Primary"
        :image="null"
        breadcrumbStyle="primary"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Demostración', 'url' => '/demo'],
            ['text' => 'Estilo Primary']
        ]"
    />

    <div class="py-8 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-primary mb-4">Estilo Primary</h2>
                <p class="text-gray-600">Usa el color primario (#179BA1) con efectos hover y fondo redondeado para el elemento actual.</p>
            </div>
        </div>
    </div>

    <!-- Estilo Secondary -->
    <x-page-header
        text="Estilo Secondary"
        :image="null"
        breadcrumbStyle="secondary"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Demostración', 'url' => '/demo'],
            ['text' => 'Estilo Secondary']
        ]"
    />

    <div class="py-8 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-secondary mb-4">Estilo Secondary</h2>
                <p class="text-gray-600">Usa el color secundario (#8DCFD4) con efectos hover y fondo redondeado para el elemento actual.</p>
            </div>
        </div>
    </div>

    <!-- Estilo Gradient -->
    <x-page-header
        text="Estilo Gradient"
        :image="null"
        breadcrumbStyle="gradient"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Demostración', 'url' => '/demo'],
            ['text' => 'Estilo Gradient']
        ]"
    />

    <div class="py-8 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mb-4">Estilo Gradient</h2>
                <p class="text-gray-600">Usa gradientes entre primary y secondary con efectos hover avanzados y sombras.</p>
            </div>
        </div>
    </div>

    <!-- Estilo Default -->
    <x-page-header
        text="Estilo Default"
        :image="null"
        breadcrumbStyle="default"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Demostración', 'url' => '/demo'],
            ['text' => 'Estilo Default']
        ]"
    />

    <div class="py-8 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Estilo Default</h2>
                <p class="text-gray-600">Estilo original con colores grises y efectos hover simples.</p>
            </div>
        </div>
    </div>

    <!-- Documentación -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Guía de Estilos de Breadcrumbs</h2>
                
                <div class="space-y-6">
                    <div class="border-l-4 border-primary pl-4">
                        <h3 class="text-xl font-semibold text-primary mb-2">Primary Style</h3>
                        <p class="text-gray-600 mb-2">Ideal para páginas principales y contenido importante.</p>
                        <code class="bg-gray-100 px-2 py-1 rounded text-sm">breadcrumbStyle="primary"</code>
                    </div>
                    
                    <div class="border-l-4 border-secondary pl-4">
                        <h3 class="text-xl font-semibold text-secondary mb-2">Secondary Style</h3>
                        <p class="text-gray-600 mb-2">Perfecto para páginas de contacto y galería.</p>
                        <code class="bg-gray-100 px-2 py-1 rounded text-sm">breadcrumbStyle="secondary"</code>
                    </div>
                    
                    <div class="border-l-4 border-gradient-to-r from-primary to-secondary pl-4">
                        <h3 class="text-xl font-semibold bg-gradient-to-r from-primary to-secondary bg-clip-text text-transparent mb-2">Gradient Style</h3>
                        <p class="text-gray-600 mb-2">Excelente para servicios y valores, con efectos visuales avanzados.</p>
                        <code class="bg-gray-100 px-2 py-1 rounded text-sm">breadcrumbStyle="gradient"</code>
                    </div>
                    
                    <div class="border-l-4 border-gray-400 pl-4">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">Default Style</h3>
                        <p class="text-gray-600 mb-2">Estilo conservador para páginas legales y administrativas.</p>
                        <code class="bg-gray-100 px-2 py-1 rounded text-sm">breadcrumbStyle="default"</code>
                    </div>
                </div>
                
                <div class="mt-8 p-4 bg-blue-50 rounded-lg">
                    <h4 class="font-semibold text-blue-900 mb-2">💡 Consejo de Uso</h4>
                    <p class="text-blue-800 text-sm">
                        Combina diferentes estilos según el tipo de página para crear una experiencia visual coherente y atractiva.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
