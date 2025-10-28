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
                <div class="mt-10 lg:mt-0">
                    <picture>
                        <img
                            sizes="(max-width: 2000px) 100vw, 2000px"
                            srcset="
                                /img/116387_ywbq0d_c_scale,w_200.jpg 200w,
                                /img/116387_ywbq0d_c_scale,w_652.jpg 652w,
                                /img/116387_ywbq0d_c_scale,w_964.jpg 964w,
                                /img/116387_ywbq0d_c_scale,w_1220.jpg 1220w,
                                /img/116387_ywbq0d_c_scale,w_1254.jpg 1254w,
                                /img/116387_ywbq0d_c_scale,w_1414.jpg 1414w,
                                /img/116387_ywbq0d_c_scale,w_1568.jpg 1568w,
                                /img/116387_ywbq0d_c_scale,w_1576.jpg 1576w,
                                /img/116387_ywbq0d_c_scale,w_2000.jpg 2000w"
                            src="/img/116387_ywbq0d_c_scale,w_2000.jpg"
                            alt="Prevención del glaucoma">
                    </picture>
                </div>
            </div>

            <!-- Servicio 2: Diagnóstico -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center mb-20 bg-gray-100 p-8">
                <div class="lg:order-2">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl mb-10">Diagnóstico preciso</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        Un diagnóstico certero es fundamental para un tratamiento exitoso. En Glaucoma Control Center, utilizamos tecnología de diagnóstico de última generación, como la tomografía de coherencia óptica (OCT) y la campimetría computarizada, para obtener una imagen completa de tu nervio óptico y tu campo visual. Esto nos permite confirmar la presencia de glaucoma con una precisión excepcional y determinar el mejor curso de acción para tu caso específico.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 lg:order-1 flex items-center justify-center">
                    <picture>
                        <img
                            sizes="(max-width: 2000px) 100vw, 2000px"
                            srcset="
                                /img/69192_snd5xn_c_scale,w_200.jpg 200w,
                                /img/69192_snd5xn_c_scale,w_582.jpg 582w,
                                /img/69192_snd5xn_c_scale,w_830.jpg 830w,
                                /img/69192_snd5xn_c_scale,w_1055.jpg 1055w,
                                /img/69192_snd5xn_c_scale,w_1186.jpg 1186w,
                                /img/69192_snd5xn_c_scale,w_1345.jpg 1345w,
                                /img/69192_snd5xn_c_scale,w_1653.jpg 1653w,
                                /img/69192_snd5xn_c_scale,w_1950.jpg 1950w,
                                /img/69192_snd5xn_c_scale,w_2000.jpg 2000w"
                            src="/img/69192_snd5xn_c_scale,w_2000.jpg"
                            alt="Diagnóstico preciso del glaucoma">
                    </picture>
                </div>
            </div>

            <!-- Servicio 3: Tratamiento Integral -->
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div class="mb-10 lg:mb-0">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl mb-10">Tratamiento integral</h2>
                    <p class="mt-4 text-lg text-gray-600">
                        No existe un único tratamiento para el glaucoma; existe el tratamiento adecuado para ti. Ofrecemos un abanico completo de soluciones personalizadas, desde gotas oftálmicas y medicamentos orales hasta los procedimientos láser más avanzados (trabeculoplastia selectiva con láser o SLT) y cirugías de alta especialidad. Nuestro objetivo es encontrar la estrategia que controle eficazmente tu presión intraocular, detenga la progresión de la enfermedad y se adapte a tu estilo de vida.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0">
                    <picture>
                        <img
                            sizes="(max-width: 2800px) 100vw, 2800px"
                            srcset="
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_200.jpg 200w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_599.jpg 599w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_871.jpg 871w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_1091.jpg 1091w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_1258.jpg 1258w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_1532.jpg 1532w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_1717.jpg 1717w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_1908.jpg 1908w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2001.jpg 2001w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2107.jpg 2107w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2219.jpg 2219w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2312.jpg 2312w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2448.jpg 2448w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2593.jpg 2593w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2458.jpg 2458w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2473.jpg 2473w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2580.jpg 2580w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2675.jpg 2675w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2774.jpg 2774w,
                                /img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2800.jpg 2800w"
                            src="/img/hombre-con-primer-plano-de-gotas-para-los-ojos_cdl95r_c_scale,w_2800.jpg"
                            alt="Tratamiento integral del glaucoma">
                    </picture>
                </div>
            </div>

        </div>
    </div>

    <!-- CTA Section -->
    <x-home.cta-section />
@endsection
