@extends('layouts.app')

@section('title', 'Nuestros Valores')

@section('content')
    <x-page-header
        text="Nuestros Valores"
        :image="null"
        breadcrumbStyle="gradient"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Nuestros Valores']
        ]"
    />

    <!-- Main Content -->
    <div class="bg-gray-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-xl font-semibold text-primary tracking-wide">Nuestros Valores</h2>
                <p class="mt-8 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Los pilares de nuestro centro</p>
                <p class="mt-6 text-lg text-gray-600 max-w-3xl mx-auto">Estos son los principios que guían cada una de nuestras acciones y decisiones.</p>
            </div>
            <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                <x-value-card
                    title="Empatía"
                    description="Nos ponemos en tu lugar para entender tus preocupaciones y ofrecerte un cuidado compasivo."
                >
                    <x-slot name="icon">
                        <x-icons.heart class="h-8 w-8" />
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Prevención"
                    description="Actuamos de forma proactiva para proteger tu visión y minimizar riesgos futuros."
                >
                    <x-slot name="icon">
                        <x-icons.shield-check class="h-8 w-8" />
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Calidad"
                    description="Buscamos la excelencia en cada diagnóstico, tratamiento y consulta que ofrecemos."
                >
                    <x-slot name="icon">
                        <x-icons.badge-check class="h-8 w-8" />
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Educación"
                    description="Te empoderamos con el conocimiento necesario para que seas un participante activo en tu salud visual."
                >
                    <x-slot name="icon">
                        <x-icons.book-open class="h-8 w-8" />
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Confianza"
                    description="Construimos relaciones duraderas basadas en la transparencia, la honestidad y el respeto mutuo."
                >
                    <x-slot name="icon">
                        <x-icons.users class="h-8 w-8" />
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Ética"
                    description="Actuamos siempre con integridad, priorizando tu bienestar por encima de todo."
                >
                    <x-slot name="icon">
                        <x-icons.scale class="h-8 w-8" />
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Responsabilidad"
                    description="Asumimos la responsabilidad de ofrecerte el mejor cuidado posible en cada visita."
                >
                    <x-slot name="icon">
                        <x-icons.hand-shake class="h-8 w-8" />
                    </x-slot>
                </x-value-card>

                <x-value-card
                    title="Compromiso"
                    description="Estamos dedicados a tu salud visual a largo plazo, acompañándote en cada etapa."
                >
                    <x-slot name="icon">
                        <x-icons.link class="h-8 w-8" />
                    </x-slot>
                </x-value-card>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <x-home.cta-section />
@endsection
