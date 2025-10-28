@extends('layouts.app')

@section('title', 'Nuestros Valores')

@section('content')
    <x-page-header
        text="Nuestros Valores"
        :image="null"
    />

    <!-- Main Content -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Los pilares de nuestro centro</h2>
                <p class="mt-4 text-lg text-gray-600">Estos son los principios que guían cada una de nuestras acciones y decisiones.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Empatía -->
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <x-icons.heart class="mx-auto h-10 w-10 text-primary" />
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Empatía</h3>
                    <p class="mt-2 text-base text-gray-600">Nos ponemos en tu lugar para entender tus preocupaciones y ofrecerte un cuidado compasivo.</p>
                </div>
                <!-- Prevención -->
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <x-icons.shield-check class="mx-auto h-10 w-10 text-primary" />
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Prevención</h3>
                    <p class="mt-2 text-base text-gray-600">Actuamos de forma proactiva para proteger tu visión y minimizar riesgos futuros.</p>
                </div>
                <!-- Calidad -->
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <x-icons.badge-check class="mx-auto h-10 w-10 text-primary" />
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Calidad</h3>
                    <p class="mt-2 text-base text-gray-600">Buscamos la excelencia en cada diagnóstico, tratamiento y consulta que ofrecemos.</p>
                </div>
                <!-- Educación -->
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <x-icons.book-open class="mx-auto h-10 w-10 text-primary" />
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Educación</h3>
                    <p class="mt-2 text-base text-gray-600">Te empoderamos con el conocimiento necesario para que seas un participante activo en tu salud visual.</p>
                </div>
                <!-- Confianza -->
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <x-icons.users class="mx-auto h-10 w-10 text-primary" />
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Confianza</h3>
                    <p class="mt-2 text-base text-gray-600">Construimos relaciones duraderas basadas en la transparencia, la honestidad y el respeto mutuo.</p>
                </div>
                <!-- Ética -->
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <x-icons.scale class="mx-auto h-10 w-10 text-primary" />
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Ética</h3>
                    <p class="mt-2 text-base text-gray-600">Actuamos siempre con integridad, priorizando tu bienestar por encima de todo.</p>
                </div>
                <!-- Responsabilidad -->
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <x-icons.hand-shake class="mx-auto h-10 w-10 text-primary" />
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Responsabilidad</h3>
                    <p class="mt-2 text-base text-gray-600">Asumimos la responsabilidad de ofrecerte el mejor cuidado posible en cada visita.</p>
                </div>
                <!-- Compromiso -->
                <div class="text-center p-6 border border-gray-200 rounded-lg">
                    <x-icons.link class="mx-auto h-10 w-10 text-primary" />
                    <h3 class="mt-4 text-xl font-bold text-gray-900">Compromiso</h3>
                    <p class="mt-2 text-base text-gray-600">Estamos dedicados a tu salud visual a largo plazo, acompañándote en cada etapa.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
