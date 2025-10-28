@extends('layouts.app')

@section('title', 'Misión y Visión')

@section('content')
    <x-page-header
        text="Misión y Visión"
        image="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
    />

    <!-- Main Content -->
    <div class="py-16 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Misión Section -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl">Nuestra misión</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Ser tu principal aliado en la lucha contra el glaucoma. Te ayudamos a comprender y controlar la enfermedad a través de un acompañamiento médico cercano y especializado, utilizando tratamientos vanguardistas para mejorar significativamente tu calidad de vida.
                    </p>
                    <p class="mt-4 text-lg text-gray-600">
                        Cada plan de tratamiento es personalizado, basado en la más sólida evidencia científica y apoyado por tecnología de última generación. Nuestro enfoque es siempre humano, ético y profundamente comprometido con la preservación de tu salud visual.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0">
                    <img class="rounded-lg shadow-xl" src="https://images.unsplash.com/photo-1591604466107-28a8c8fe8c32?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="doctor-using-advanced-technology.jpg">
                </div>
            </div>

            <!-- Divider -->
            <div class="py-12">
                <div class="border-t border-gray-200"></div>
            </div>

            <!-- Visión Section -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div class="lg:order-2">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl">Nuestra visión</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Aspiramos a ser el centro de referencia nacional en la prevención, diagnóstico y tratamiento integral del glaucoma. Queremos ser reconocidos no solo por nuestra excelencia e innovación médica continua, sino también por la calidez de nuestra atención y la sólida confianza que construimos con cada uno de nuestros pacientes.
                    </p>
                    <p class="mt-4 text-lg text-gray-600">
                        Buscamos transformar vidas, mejorando la calidad de visión de nuestra comunidad a través de servicios especializados, una activa educación visual y la rigurosa aplicación de las mejores prácticas clínicas a nivel mundial.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 lg:order-1">
                    <img class="rounded-lg shadow-xl" src="https://images.unsplash.com/photo-1605651202772-1c481639d634?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="bright-and-modern-clinic-hallway.jpg">
                </div>
            </div>
        </div>
    </div>
@endsection
