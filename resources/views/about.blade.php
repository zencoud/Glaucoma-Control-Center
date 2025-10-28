@extends('layouts.app')

@section('title', 'Quiénes Somos | Glaucoma Control Center - Especialistas en Salud Visual')
@section('description', 'Conoce a nuestro equipo de especialistas en glaucoma. En Glaucoma Control Center, contamos con oftalmólogos altamente capacitados y tecnología de vanguardia para brindarte la mejor atención en salud visual.')
@section('keywords', 'quienes somos, equipo médico, oftalmólogos, especialistas glaucoma, centro médico, experiencia, tecnología, atención personalizada, salud visual')
@section('og_title', 'Quiénes Somos | Glaucoma Control Center - Especialistas en Salud Visual')
@section('og_description', 'Conoce a nuestro equipo de especialistas en glaucoma. Contamos con oftalmólogos altamente capacitados y tecnología de vanguardia para brindarte la mejor atención en salud visual.')
@section('og_image', url('/img/glaucoma-control-center-logo.png'))
@section('twitter_title', 'Quiénes Somos | Glaucoma Control Center - Especialistas en Salud Visual')
@section('twitter_description', 'Conoce a nuestro equipo de especialistas en glaucoma. Contamos con oftalmólogos altamente capacitados y tecnología de vanguardia para brindarte la mejor atención en salud visual.')
@section('twitter_image', url('/img/glaucoma-control-center-logo.png'))

@section('content')
    <x-page-header
        text="¿Quiénes somos?"
        :image="null"
        breadcrumbStyle="primary"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => '¿Quiénes somos?']
        ]"
    />

    <!-- Main Content -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center">
                <div class="lg:order-1">
                    <h2 class="text-3xl font-extrabold text-primary sm:text-4xl">Un refugio de confianza para tu salud
                        visual</h2>
                    <p class="mt-10 text-xl text-gray-600">
                        En Glaucoma Control Center, somos más que un centro médico; somos un equipo de profesionales
                        apasionados, dedicados exclusivamente al diagnóstico, prevención y tratamiento integral del
                        glaucoma. Entendemos la incertidumbre que esta condición puede generar, y por eso nuestro compromiso
                        va más allá del tratamiento: te ofrecemos un acompañamiento cercano, humano y ético en cada paso del
                        camino.
                    </p>
                    <p class="mt-6 text-xl text-gray-600">
                        Nuestro equipo está conformado por oftalmólogos con subespecialidad y una vasta experiencia en el
                        manejo del glaucoma. Nos enfocamos en brindarte soluciones personalizadas y la confianza que
                        necesitas para tomar el control de tu salud visual, mejorando así tu calidad de vida.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 lg:order-2">
                    <picture>
                        <source
                            media="(max-width: 767px)"
                            sizes="(max-width: 687px) 100vw, 687px"
                            srcset="
                            {{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_ar_1_1,c_fill,g_auto__c_scale,w_200.avif') }} 200w,
                            {{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_ar_1_1,c_fill,g_auto__c_scale,w_612.avif') }} 612w,
                            {{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_ar_1_1,c_fill,g_auto__c_scale,w_687.avif') }} 687w">
                        <source
                            media="(min-width: 768px) and (max-width: 991px)"
                            sizes="(max-width: 981px) 70vw, 687px"
                            srcset="
                            {{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_ar_4_3,c_fill,g_auto__c_scale,w_538.avif') }} 538w,
                            {{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_ar_4_3,c_fill,g_auto__c_scale,w_687.avif') }} 687w">
                        <source
                            media="(min-width: 992px) and (max-width: 1199px)"
                            sizes="(max-width: 1145px) 60vw, 687px"
                            srcset="
                            {{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_ar_16_9,c_fill,g_auto__c_scale,w_596.avif') }} 596w,
                            {{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_ar_16_9,c_fill,g_auto__c_scale,w_687.avif') }} 687w">
                        <img
                            sizes="(max-width: 1718px) 40vw, 687px"
                            srcset="
                            {{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_c_scale,w_480.avif') }} 480w,
                            {{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_c_scale,w_687.avif') }} 687w"
                            src="{{ asset('img/photo-1550831107-1553da8c8464_1_fc8rgz_c_scale,w_687.avif') }}"
                            alt="Doctor explicando a paciente">
                    </picture>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <x-home.cta-section />
@endsection
