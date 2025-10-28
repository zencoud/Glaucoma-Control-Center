@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <x-page-header
        text="Contacto"
        :image="null"
    />

    <!-- Main Content -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

                <!-- Contact Info -->
                <div>
                    <h2 class="text-3xl font-extrabold text-primary mb-6">Información de Contacto</h2>
                    <p class="mt-4 text-lg text-gray-600">Estamos aquí para cuidar de tu salud visual.</p>
                    
                    <div class="mt-8 space-y-8">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                                    <x-icons.phone class="h-6 w-6 text-primary" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Teléfono</h3>
                                <a href="tel:3343024883" class="text-lg text-gray-600 hover:text-primary transition-colors duration-300">33 4302 4883</a>
                                <p class="text-sm text-gray-500 mt-1">Lunes a Viernes: 9:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                                    <x-icons.mail class="h-6 w-6 text-primary" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Correo Electrónico</h3>
                                <a href="mailto:ar.oftalmo@gmail.com" class="text-lg text-gray-600 hover:text-primary transition-colors duration-300">ar.oftalmo@gmail.com</a>
                                <p class="text-sm text-gray-500 mt-1">Respuesta en 24 horas</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center">
                                    <x-icons.instagram class="h-6 w-6 text-primary" />
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900">Instagram</h3>
                                <a href="https://instagram.com/ar.oftalmo" target="_blank" class="text-lg text-gray-600 hover:text-primary transition-colors duration-300">@ar.oftalmo</a>
                                <p class="text-sm text-gray-500 mt-1">Síguenos para consejos de salud visual</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-gray-50 p-8 rounded-lg">
                    <h2 class="text-3xl font-extrabold text-primary mb-6">Envíanos un mensaje</h2>
                    <p class="mt-4 text-lg text-gray-600">Cuéntanos cómo podemos ayudarte con tu salud visual.</p>
                    <form action="#" method="POST" class="mt-8 space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <x-text-input 
                                name="name" 
                                label="Nombre" 
                                required 
                                placeholder="Tu nombre completo"
                            />
                            <x-text-input 
                                name="email" 
                                type="email" 
                                label="Correo electrónico" 
                                required 
                                placeholder="tu@email.com"
                            />
                        </div>
                        <x-textarea-input 
                            name="message" 
                            label="Mensaje" 
                            rows="4" 
                            required 
                            placeholder="Cuéntanos cómo podemos ayudarte..."
                        />
                        <div>
                            <x-button as="button" variant="primary" class="inline-flex items-center">
                                <x-icons.paper-airplane class="-ml-1 mr-2 h-5 w-5" />
                                Enviar mensaje
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Gallery Section -->
            <x-gallery-section 
                title="Nuestro Centro Médico"
                subtitle="Conoce nuestro espacio de trabajo, tecnología y el equipo que cuida de tu salud visual."
                :limit="6"
                columns="sm:grid-cols-2 lg:grid-cols-3"
                background=""
                padding="mt-16"
            />
        </div>
    </div>
@endsection
