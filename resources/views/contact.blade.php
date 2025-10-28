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
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">

                <!-- Contact Info -->
                <div class="lg:col-span-1">
                    <h2 class="text-3xl font-extrabold text-primary">Ponte en contacto</h2>
                    <p class="mt-4 text-lg text-gray-600">Estamos aquí para ayudarte. Llámanos, envíanos un correo o visítanos.</p>
                    <div class="mt-8 space-y-6">
                        <div class="flex items-start">
                            <x-icons.phone class="flex-shrink-0 h-6 w-6 text-primary mt-1" />
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-gray-900">Teléfono</h3>
                                <a href="tel:3343024883" class="text-base text-gray-600 hover:text-primary">33 4302 4883</a>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <x-icons.mail class="flex-shrink-0 h-6 w-6 text-primary mt-1" />
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-gray-900">Correo electrónico</h3>
                                <a href="mailto:ar.oftalmo@gmail.com" class="text-base text-gray-600 hover:text-primary">ar.oftalmo@gmail.com</a>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <x-icons.instagram class="flex-shrink-0 h-6 w-6 text-primary mt-1" />
                            <div class="ml-3">
                                <h3 class="text-lg font-medium text-gray-900">Instagram</h3>
                                <a href="https://instagram.com/ar.oftalmo" target="_blank" class="text-base text-gray-600 hover:text-primary">@ar.oftalmo</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <h2 class="text-3xl font-extrabold text-primary">Envíanos un mensaje</h2>
                    <form action="#" method="POST" class="mt-8 space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                                <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                                <input type="email" name="email" id="email" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm">
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                            <textarea name="message" id="message" rows="4" class="mt-1 block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm"></textarea>
                        </div>
                        <div>
                            <x-button as="button" variant="primary">Enviar mensaje</x-button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Map Placeholder -->
            <div class="mt-16">
                <h2 class="text-3xl font-extrabold text-primary text-center">Nuestra ubicación</h2>
                <div class="mt-6 bg-gray-200 rounded-lg h-96 flex items-center justify-center">
                    <p class="text-gray-500">Aquí se mostrará el mapa de Google.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
