@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gray-800 overflow-hidden">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                 alt="doctor-background-hero.jpg" class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-gray-700 opacity-60"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">Atención Especializada para el Control del Glaucoma</h1>
            <p class="mt-6 max-w-3xl text-xl text-gray-300">Cuidamos tu salud visual con tecnología de vanguardia y un enfoque humano.</p>
            <div class="mt-10 flex space-x-4">
                <a href="/servicios" class="inline-block bg-primary border border-primary text-white text-base font-medium py-3 px-8 rounded hover:bg-transparent hover:text-white transition-colors duration-300">Nuestros Servicios</a>
                <a href="/quienes-somos" class="inline-block bg-transparent border border-white text-white text-base font-medium py-3 px-8 rounded hover:bg-white hover:text-primary transition-colors duration-300">Sobre Nosotros</a>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div>
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl">Un Refugio de Confianza para tu Salud Visual</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        En Glaucoma Control Center, somos más que un centro médico; somos un equipo de profesionales apasionados, dedicados exclusivamente al diagnóstico, prevención y tratamiento integral del glaucoma. Entendemos la incertidumbre que esta condición puede generar, y por eso nuestro compromiso va más allá del tratamiento: te ofrecemos un acompañamiento cercano, humano y ético en cada paso del camino.
                    </p>
                    <p class="mt-4 text-lg text-gray-600">
                        Nuestro equipo está conformado por oftalmólogos con subespecialidad y una vasta experiencia en el manejo del glaucoma. Nos enfocamos en brindarte soluciones personalizadas y la confianza que necesitas para tomar el control de tu salud visual, mejorando así tu calidad de vida.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0">
                    <img class="rounded-lg shadow-xl" src="https://images.unsplash.com/photo-1550831107-1553da8c8464?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="doctor-explaining-to-patient.jpg">
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-primary tracking-wide uppercase">Nuestros Servicios</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Un Enfoque Integral para tu Visión</p>
            </div>
            <div class="mt-12 grid gap-8 md:grid-cols-3">
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-primary">Prevención</h3>
                    <p class="mt-2 text-base text-gray-600">La clave para un futuro visual claro. Mediante revisiones exhaustivas y tecnología de punta, identificamos factores de riesgo y establecemos un plan proactivo para proteger tu visión a largo plazo.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-primary">Diagnóstico</h3>
                    <p class="mt-2 text-base text-gray-600">Precisión y certeza para tu tranquilidad. Utilizamos pruebas diagnósticas avanzadas para detectar el glaucoma en sus etapas más tempranas, permitiendo un tratamiento oportuno y eficaz.</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold text-primary">Tratamiento Integral</h3>
                    <p class="mt-2 text-base text-gray-600">Soluciones personalizadas para controlar el glaucoma. Desde tratamientos médicos hasta procedimientos láser y quirúrgicos de vanguardia, diseñamos un plan a tu medida para gestionar la enfermedad y preservar tu vista.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Teaser Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Conoce Nuestras Instalaciones</h2>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-600">Contamos con un espacio moderno y confortable, equipado con la última tecnología para tu cuidado.</p>
            </div>
            <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1612534260388-71b839003940?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="clinic-reception-area.jpg" class="w-full h-64 object-cover">
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1579684385127-6c1d73494735?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="modern-medical-equipment.jpg" class="w-full h-64 object-cover">
                </div>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1631217872992-79CCA1459461?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" alt="comfortable-waiting-room.jpg" class="w-full h-64 object-cover">
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="#" class="inline-block bg-primary border border-primary text-white text-base font-medium py-3 px-8 rounded hover:bg-transparent hover:text-primary transition-colors duration-300">Ver Galería Completa</a>
            </div>
        </div>
    </div>

    <!-- Final CTA Section -->
    <div class="bg-secondary">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">¿Listo para tomar el control de tu salud visual?</span>
                <span class="block text-primary">Agenda tu cita hoy mismo.</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md">
                    <a href="/contacto" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded text-white bg-primary hover:bg-opacity-90">
                        Ponerse en contacto
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
