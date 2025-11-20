@extends('layouts.app')

@section('title', 'Misión y Visión | Glaucoma Control Center - Especialistas en Salud Visual')
@section('description', 'Conoce nuestra misión y visión en Glaucoma Control Center. Comprometidos con ser tu principal aliado en la lucha contra el glaucoma, ofreciendo tratamientos vanguardistas y atención humana especializada.')
@section('keywords', 'misión, visión, glaucoma, centro médico, especialistas, tratamientos, atención médica, salud visual, compromiso, excelencia médica')
@section('og_title', 'Misión y Visión | Glaucoma Control Center - Especialistas en Salud Visual')
@section('og_description', 'Conoce nuestra misión y visión. Comprometidos con ser tu principal aliado en la lucha contra el glaucoma, ofreciendo tratamientos vanguardistas y atención humana especializada.')
@section('og_image', url('/img/glaucoma-control-center-logo.png'))
@section('twitter_title', 'Misión y Visión | Glaucoma Control Center - Especialistas en Salud Visual')
@section('twitter_description', 'Conoce nuestra misión y visión. Comprometidos con ser tu principal aliado en la lucha contra el glaucoma, ofreciendo tratamientos vanguardistas y atención humana especializada.')
@section('twitter_image', url('/img/glaucoma-control-center-logo.png'))

@section('content')
    <x-page-header
        text="Misión y Visión"
        :image="null"
        breadcrumbStyle="primary"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Misión y Visión']
        ]"
    />

    <!-- Main Content -->
    <div class="py-16 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Misión Section -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center mb-20">
                <div class="mb-10 lg:mb-0">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl mb-10">Nuestra misión</h2>
                    <p class="mt-4 text-lg text-gray-600 indent-8">
                        Ser tu principal aliado en la lucha contra el glaucoma. Te ayudamos a comprender y controlar la enfermedad a través de un acompañamiento médico cercano y especializado, utilizando tratamientos vanguardistas para mejorar significativamente tu calidad de vida.
                    </p>
                    <p class="mt-4 text-lg text-gray-600 indent-8">
                        Cada plan de tratamiento es personalizado, basado en la más sólida evidencia científica y apoyado por tecnología de última generación. Nuestro enfoque es siempre humano, ético y profundamente comprometido con la preservación de tu salud visual.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 flex items-center justify-center h-full w-full">
                    <div class="lazy-image-container w-80 h-80 rounded-full overflow-hidden mx-auto" data-src="{{ asset('img/doctora-selfie.png') }}" data-circular="true">
                        <x-image-skeleton width="w-full" height="h-full" />
                    </div>
                </div>
            </div>

            <!-- Visión Section -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div class="lg:order-2">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl mb-10">Nuestra visión</h2>
                    <p class="mt-4 text-lg text-gray-600 indent-8">
                        Aspiramos a ser el centro de referencia nacional en la prevención, diagnóstico y tratamiento integral del glaucoma. Queremos ser reconocidos no solo por nuestra excelencia e innovación médica continua, sino también por la calidez de nuestra atención y la sólida confianza que construimos con cada uno de nuestros pacientes.
                    </p>
                    <p class="mt-4 text-lg text-gray-600 indent-8">
                        Buscamos transformar vidas, mejorando la calidad de visión de nuestra comunidad a través de servicios especializados, una activa educación visual y la rigurosa aplicación de las mejores prácticas clínicas a nivel mundial.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 lg:order-1 bg-white p-8 flex items-center justify-center h-full w-full">
                    <div class="lazy-image-container w-full" data-src="/img/54e2a4da-8f2a-4d97-8869-d91d44b10b0e.png">
                        <x-image-skeleton width="w-full" height="h-48" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <x-home.cta-section />

    @push('scripts')
    <script>
        // Ajustar imágenes en contenedores circulares
        document.addEventListener('DOMContentLoaded', function() {
            const circularContainers = document.querySelectorAll('.lazy-image-container[data-circular="true"]');
            circularContainers.forEach(container => {
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.addedNodes.length) {
                            mutation.addedNodes.forEach(function(node) {
                                if (node.tagName === 'IMG') {
                                    node.classList.remove('object-contain');
                                    node.classList.add('object-cover', 'w-full', 'h-full');
                                }
                            });
                        }
                    });
                });
                observer.observe(container, { childList: true, subtree: true });
            });
        });
    </script>
    @endpush
@endsection
