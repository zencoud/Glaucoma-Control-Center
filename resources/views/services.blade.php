@extends('layouts.app')

@section('title', 'Nuestros Servicios | Glaucoma Control Center - Especialistas en Salud Visual')
@section('description', 'Descubre nuestros servicios especializados en glaucoma: prevención, diagnóstico preciso y tratamiento integral. Tecnología de vanguardia y atención personalizada para preservar tu salud visual.')
@section('keywords', 'servicios, prevención, diagnóstico, tratamiento, glaucoma, oftalmología, OCT, campimetría, láser, cirugía, presión intraocular, salud visual, especialistas')
@section('og_title', 'Nuestros Servicios | Glaucoma Control Center - Especialistas en Salud Visual')
@section('og_description', 'Descubre nuestros servicios especializados en glaucoma: prevención, diagnóstico preciso y tratamiento integral. Tecnología de vanguardia y atención personalizada para preservar tu salud visual.')
@section('og_image', url('/img/glaucoma-control-center-logo.png'))
@section('twitter_title', 'Nuestros Servicios | Glaucoma Control Center - Especialistas en Salud Visual')
@section('twitter_description', 'Descubre nuestros servicios especializados en glaucoma: prevención, diagnóstico preciso y tratamiento integral. Tecnología de vanguardia y atención personalizada para preservar tu salud visual.')
@section('twitter_image', url('/img/glaucoma-control-center-logo.png'))

@section('content')
    <x-page-header
        text="Nuestros Servicios"
        :image="null"
        breadcrumbStyle="gradient"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Nuestros Servicios']
        ]"
    />

    <!-- Main Content -->
    <div class="py-16 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">

            <!-- Servicio 1: Prevención -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center mb-20">
                <div class="mb-10 lg:mb-0">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl mb-10">Prevención</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        La mejor forma de combatir el glaucoma es anticiparse. Nuestro programa de prevención está diseñado para identificar factores de riesgo y detectar los signos más tempranos de la enfermedad, mucho antes de que afecten tu visión. A través de revisiones oftalmológicas completas y un seguimiento periódico, establecemos un plan proactivo para proteger tu salud visual a largo plazo.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 w-full">
                    <div class="lazy-image-container w-full" data-src="/img/116387_ywbq0d_c_scale,w_2000.jpg">
                        <x-image-skeleton width="w-full" height="aspect-auto" />
                    </div>
                </div>
            </div>

            <!-- Servicio 2: Diagnóstico -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center mb-20 bg-gray-100 p-8">
                <div class="lg:order-2">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl mb-10">Diagnóstico preciso</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Un diagnóstico certero es fundamental para un tratamiento exitoso. En Glaucoma Control Center, evaluamos tus estudios especializados, como la tomografía de coherencia óptica (OCT) y la campimetría computarizada, para confirmar la presencia de glaucoma con una precisión excepcional y determinar el mejor curso de acción para tu caso específico.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 lg:order-1 flex items-center justify-center w-full">
                    <div class="lazy-image-container w-full" data-src="/img/2150801430.jpg">
                        <x-image-skeleton width="w-full" height="aspect-auto" />
                    </div>
                </div>
            </div>

            <!-- Servicio 3: Tratamiento Integral -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center mb-20">
                <div class="mb-10 lg:mb-0">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl mb-10">Tratamiento integral</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        No existe un único tratamiento para el glaucoma; existe el tratamiento adecuado para ti. Ofrecemos un abanico completo de soluciones personalizadas, desde gotas oftálmicas y medicamentos orales hasta los procedimientos láser más avanzados (trabeculoplastia selectiva con láser o SLT) y cirugías de alta especialidad. Nuestro objetivo es encontrar la estrategia que controle eficazmente tu presión intraocular, detenga la progresión de la enfermedad y se adapte a tu estilo de vida.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 w-full">
                    <div class="lazy-image-container w-full" data-src="/img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2800.jpg">
                        <x-image-skeleton width="w-full" height="aspect-auto" />
                    </div>
                </div>
            </div>

            <!-- Lista de Servicios -->
            <div class="bg-gray-50 rounded-lg p-8 lg:p-12">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl mb-4">Servicios</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Ofrecemos una amplia gama de servicios especializados para el cuidado integral de tu salud visual</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Consulta oftalmológica general -->
                    <div class="bg-white p-6 group">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-none bg-primary text-white mx-auto mb-4">
                            <x-icons.eye class="h-8 w-8" />
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center">Consulta oftalmológica general</h3>
                    </div>

                    <!-- Consulta especializada de glaucoma -->
                    <div class="bg-white p-6 group">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-none bg-primary text-white mx-auto mb-4">
                            <x-icons.document-text class="h-8 w-8" />
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center">Consulta especializada de glaucoma</h3>
                    </div>

                    <!-- Consulta on-line -->
                    <div class="bg-white p-6 group">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-none bg-primary text-white mx-auto mb-4">
                            <x-icons.link class="h-8 w-8" />
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center">Consulta on-line</h3>
                    </div>

                    <!-- Láser para glaucoma -->
                    <div class="bg-white p-6 group">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-none text-white mx-auto mb-4">
                            <img src="{{ asset('img/laser-icon.png') }}" alt="Láser para glaucoma" class="w-full h-full object-contain">
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center">Láser para glaucoma</h3>
                    </div>

                    <!-- Cirugía -->
                    <div class="bg-white p-6 group">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-none bg-primary text-white mx-auto mb-4">
                            <img src="{{ asset('img/cirugía-icon.png') }}" alt="Cirugía para glaucoma" class="w-full h-full object-contain">
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center">Cirugía</h3>
                    </div>

                    <!-- Terapia de Ojo Seco -->
                    <div class="bg-white p-6 group">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-none bg-primary text-white mx-auto mb-4">
                            <x-icons.heart class="h-8 w-8" />
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center">Terapia de Ojo Seco</h3>
                    </div>

                    <!-- Óptica -->
                    <div class="bg-white p-6 group">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-none text-white mx-auto mb-4">
                            <img src="{{ asset('img/óptica-icon.png') }}" alt="Óptica para glaucoma" class="w-full h-full object-contain">
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center">Óptica</h3>
                    </div>

                    <!-- Farmacia -->
                    <div class="bg-white p-6 group">
                        <div class="flex-shrink-0 flex items-center justify-center h-16 w-16 rounded-none bg-primary text-white mx-auto mb-4">
                            <x-icons.shield-check class="h-8 w-8" />
                        </div>
                        <h3 class="text-lg font-semibold text-gray-900 text-center">Farmacia</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- CTA Section -->
    <x-home.cta-section />
@endsection
