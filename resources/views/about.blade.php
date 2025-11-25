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
    <div class="bg-white py-30">
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
                        Nuestro equipo está conformado por oftalmólogos con alta especialidad y una vasta experiencia en el
                        manejo del glaucoma. Nos enfocamos en brindarte soluciones personalizadas y la confianza que
                        necesitas para tomar el control de tu salud visual, mejorando así tu calidad de vida.
                    </p>
                </div>
                <div class="mt-10 lg:mt-0 lg:order-2 w-full">
                    <div class="lazy-image-container w-full" data-src="{{ asset('img/doctora.png') }}">
                        <x-image-skeleton width="w-full" height="aspect-auto" />
                    </div>
                    <div class="mt-6 text-center lg:text-left">
                        <h3 class="text-2xl font-bold text-primary">Dra. Miriam Adriana Ramos Hernández</h3>
                        <p class="mt-2 text-lg text-gray-700">Cirujana oftalmóloga / Especialista en glaucoma</p>
                        <p class="mt-2 text-lg font-semibold text-gray-800">Fundadora y Directora de Glaucoma Control Center</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <x-home.cta-section />
@endsection
