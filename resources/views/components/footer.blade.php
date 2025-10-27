<footer class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <!-- Logo and Social -->
            <div class="space-y-8 xl:col-span-1">
                <a href="/">
                    <img class="h-10" src="{{ asset('img/glaucoma-control-center-logo.png') }}" alt="Glaucoma Control Center Logo">
                </a>
                <p class="text-gray-400 text-base">
                    Cuidando tu salud visual con un enfoque humano y tecnología de vanguardia.
                </p>
                <div class="flex space-x-6">
                    <a href="https://instagram.com/ar.oftalmo" target="_blank" class="text-gray-400 hover:text-white">
                        <span class="sr-only">Instagram</span>
                        <x-icons.instagram class="h-6 w-6" />
                    </a>
                </div>
            </div>

            <!-- Links -->
            <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase">Navegación</h3>
                        <ul class="mt-4 space-y-4">
                            <li><a href="/quienes-somos" class="text-base text-gray-400 hover:text-white">¿Quiénes somos?</a></li>
                            <li><a href="/servicios" class="text-base text-gray-400 hover:text-white">Servicios</a></li>
                            <li><a href="/contacto" class="text-base text-gray-400 hover:text-white">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase">Legal</h3>
                        <ul class="mt-4 space-y-4">
                            <li><a href="#" class="text-base text-gray-400 hover:text-white">Aviso de Privacidad</a></li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-1 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase">Contacto</h3>
                        <ul class="mt-4 space-y-4">
                            <li class="flex items-start">
                                <x-icons.phone class="flex-shrink-0 h-6 w-6 text-gray-400 mt-0.5" />
                                <a href="tel:3343024883" class="ml-3 text-base text-gray-400 hover:text-white">33 4302 4883</a>
                            </li>
                            <li class="flex items-start">
                                <x-icons.mail class="flex-shrink-0 h-6 w-6 text-gray-400 mt-0.5" />
                                <a href="mailto:ar.oftalmo@gmail.com" class="ml-3 text-base text-gray-400 hover:text-white">ar.oftalmo@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-700 pt-8">
            <p class="text-base text-gray-400 xl:text-center">&copy; {{ date('Y') }} Glaucoma Control Center. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
