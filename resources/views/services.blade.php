@extends('layouts.app')

@section('title', 'Nuestros Servicios')

@section('content')
    <x-page-header
        text="Nuestros Servicios"
        image="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
    />

    <!-- Main Content -->
    <div class="py-16 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <!-- Servicio 1: Prevención -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl">Prevención</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        La mejor forma de combatir el glaucoma es anticiparse. Nuestro programa de prevención está diseñado para identificar factores de riesgo y detectar los signos más tempranos de la enfermedad, mucho antes de que afecten tu visión. A través de revisiones oftalmológicas completas y un seguimiento periódico, establecemos un plan proactivo para proteger tu salud visual a largo plazo.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0">
                    <img class="rounded-lg shadow-xl" src="https://images.unsplash.com/photo-1580281657527-218f44e32d2a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="eye-exam-and-prevention.jpg">
                </div>
            </div>

            <!-- Servicio 2: Diagnóstico -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div class="lg:order-2">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl">Diagnóstico preciso</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Un diagnóstico certero es fundamental para un tratamiento exitoso. En Glaucoma Control Center, utilizamos tecnología de diagnóstico de última generación, como la tomografía de coherencia óptica (OCT) y la campimetría computarizada, para obtener una imagen completa de tu nervio óptico y tu campo visual. Esto nos permite confirmar la presencia de glaucoma con una precisión excepcional y determinar el mejor curso de acción para tu caso específico.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 lg:order-1">
                    <img class="rounded-lg shadow-xl" src="https://images.unsplash.com/photo-1579154286829-e84eb535a735?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" alt="diagnostic-equipment-in-use.jpg">
                </div>
            </div>

            <!-- Servicio 3: Tratamiento Integral -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl">Tratamiento integral</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        No existe un único tratamiento para el glaucoma; existe el tratamiento adecuado para ti. Ofrecemos un abanico completo de soluciones personalizadas, desde gotas oftálmicas y medicamentos orales hasta los procedimientos láser más avanzados (trabeculoplastia selectiva con láser o SLT) y cirugías de alta especialidad. Nuestro objetivo es encontrar la estrategia que controle eficazmente tu presión intraocular, detenga la progresión de la enfermedad y se adapte a tu estilo de vida.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0">
                    <img class="rounded-lg shadow-xl" src="https://images.unsplash.com/photo-1618939307336-a01f4627de84?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="doctor-consulting-with-patient.jpg">
                </div>
            </div>

        </div>
    </div>
@endsection
