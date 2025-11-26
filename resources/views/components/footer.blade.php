<footer class="bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Navegación -->
            <div>
                <h3 class="text-sm font-semibold text-gray-200 tracking-wider">Navegación</h3>
                <ul class="mt-4 space-y-4">
                    <li><a href="/quienes-somos" class="text-base text-gray-400 hover:text-white">¿Quiénes somos?</a></li>
                    <li><a href="/servicios" class="text-base text-gray-400 hover:text-white">Servicios</a></li>
                    <li><a href="/contacto" class="text-base text-gray-400 hover:text-white">Contacto</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div>
                <h3 class="text-sm font-semibold text-gray-200 tracking-wider">Legal</h3>
                <ul class="mt-4 space-y-4">
                    <li><a href="/aviso-de-privacidad" class="text-base text-gray-400 hover:text-white">Aviso de privacidad</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div>
                <h3 class="text-sm font-semibold text-gray-200 tracking-wider">Contacto</h3>
                <ul class="mt-4 space-y-4">
                    <li class="flex items-start">
                        <x-icons.phone class="flex-shrink-0 h-6 w-6 text-gray-400 mt-0.5" />
                        <a href="tel:3343024883" class="ml-3 text-base text-gray-400 hover:text-white">33 4302 4883</a>
                    </li>
                    <li class="flex items-start">
                        <x-icons.mail class="flex-shrink-0 h-6 w-6 text-gray-400 mt-0.5" />
                        <a href="mailto:ar.oftalmo@glaucomacc.com.mx" class="ml-3 text-base text-gray-400 hover:text-white">ar.oftalmo@glaucomacc.com.mx</a>
                    </li>
                    <li class="flex items-start">
                        <x-icons.instagram class="flex-shrink-0 h-6 w-6 text-gray-400 mt-0.5" />
                        <a href="https://instagram.com/glaucomacc" target="_blank" class="ml-3 text-base text-gray-400 hover:text-white">@glaucomacc</a>
                    </li>
                    <!-- doctoralia -->
                    <li class="flex items-start">
                        <x-icons.doctoralia class="flex-shrink-0 h-6 w-6 text-gray-400 mt-0.5" />
                        <a href="https://www.doctoralia.com.mx/miriam-adriana-ramos-hdez/oftalmologo/zapopan#addresses-section" target="_blank" class="ml-3 text-base text-gray-400 hover:text-white">Glaucoma Control Center</a>
                    </li>
                </ul>
            </div>

            <!-- Logo -->
            <div class="space-y-8 text-center">
                <a href="/" class="inline-block">
                    <picture>
                        <img
                            sizes="(max-width: 1400px) 100vw, 1400px"
                            srcset="
                            {{ asset('img/glaucoma-control-center-logo-footer_wmzx9n_c_scale,w_200.png') }} 200w,
                            {{ asset('img/glaucoma-control-center-logo-footer_wmzx9n_c_scale,w_566.png') }} 566w,
                            {{ asset('img/glaucoma-control-center-logo-footer_wmzx9n_c_scale,w_840.png') }} 840w,
                            {{ asset('img/glaucoma-control-center-logo-footer_wmzx9n_c_scale,w_1083.png') }} 1083w,
                            {{ asset('img/glaucoma-control-center-logo-footer_wmzx9n_c_scale,w_1400.png') }} 1400w"
                            src="{{ asset('img/glaucoma-control-center-logo-footer_wmzx9n_c_scale,w_1400.png') }}"
                            alt="Glaucoma Control Center Logo"
                            class="h-[8.25rem] w-auto mx-auto">
                    </picture>
                </a>
                <p class="text-gray-400 text-base">
                    Cuidando tu salud visual con un enfoque humano y tecnología de vanguardia.
                </p>
            </div>
        </div>
        <div class="mt-12 border-t border-gray-700 pt-8">
            <p class="text-base text-gray-400 xl:text-center">&copy; {{ date('Y') }} Glaucoma Control Center. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
