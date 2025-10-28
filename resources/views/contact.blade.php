@extends('layouts.app')

@section('title', 'Contacto | Glaucoma Control Center - Especialistas en Salud Visual')
@section('description', 'Contáctanos para agendar tu consulta de glaucoma. En Glaucoma Control Center te brindamos atención especializada, humana y de excelencia. Teléfono, email e Instagram disponibles.')
@section('keywords', 'contacto, consulta, cita, glaucoma, oftalmología, teléfono, email, Instagram, atención médica, especialistas, salud visual, agendar')
@section('og_title', 'Contacto | Glaucoma Control Center - Especialistas en Salud Visual')
@section('og_description', 'Contáctanos para agendar tu consulta de glaucoma. Te brindamos atención especializada, humana y de excelencia. Teléfono, email e Instagram disponibles.')
@section('og_image', url('/img/glaucoma-control-center-logo.png'))
@section('twitter_title', 'Contacto | Glaucoma Control Center - Especialistas en Salud Visual')
@section('twitter_description', 'Contáctanos para agendar tu consulta de glaucoma. Te brindamos atención especializada, humana y de excelencia. Teléfono, email e Instagram disponibles.')
@section('twitter_image', url('/img/glaucoma-control-center-logo.png'))

@section('content')
    <x-page-header
        text="Contacto"
        :image="null"
        breadcrumbStyle="secondary"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Contacto']
        ]"
    />

    <!-- Main Content -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-16">

                <!-- Contact Info -->
                <div class="lg:col-span-2">
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
                <div class="lg:col-span-3 bg-gray-50 p-8 rounded-lg">
                    <h2 class="text-3xl font-extrabold text-primary mb-6">Envíanos un mensaje</h2>
                    <p class="mt-4 text-lg text-gray-600">Cuéntanos cómo podemos ayudarte con tu salud visual.</p>
                    
                    <!-- Success/Error Messages -->
                    @if(session('success'))
                        <div class="mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mt-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
                            <ul class="list-disc list-inside">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="mt-8 space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nombre *</label>
                                <input 
                                    type="text" 
                                    name="name" 
                                    id="name"
                                    value="{{ old('name') }}"
                                    required 
                                    placeholder="Tu nombre completo"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                >
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Correo electrónico *</label>
                                <input 
                                    type="email" 
                                    name="email" 
                                    id="email"
                                    value="{{ old('email') }}"
                                    required 
                                    placeholder="tu@email.com"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                >
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Teléfono</label>
                                <input 
                                    type="tel" 
                                    name="phone" 
                                    id="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="33 1234 5678"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                >
                            </div>
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Asunto</label>
                                <input 
                                    type="text" 
                                    name="subject" 
                                    id="subject"
                                    value="{{ old('subject') }}"
                                    placeholder="Consulta sobre..."
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                >
                            </div>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Mensaje *</label>
                            <textarea 
                                name="message" 
                                id="message"
                                rows="4" 
                                required 
                                placeholder="Cuéntanos cómo podemos ayudarte..."
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                            >{{ old('message') }}</textarea>
                        </div>
                        
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
