<div class="relative h-[450px] sm:h-[500px] md:h-[550px]">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <picture>
            <source media="(max-width: 578px)" srcset="{{ asset('img/2150801430_hxb0a6_c_scale,w_578.jpg') }}">
            <source media="(max-width: 833px)" srcset="{{ asset('img/2150801430_hxb0a6_c_scale,w_833.jpg') }}">
            <source media="(max-width: 1085px)" srcset="{{ asset('img/2150801430_hxb0a6_c_scale,w_1085.jpg') }}">
            <source media="(max-width: 1288px)" srcset="{{ asset('img/2150801430_hxb0a6_c_scale,w_1288.jpg') }}">
            <source media="(max-width: 1400px)" srcset="{{ asset('img/2150801430_hxb0a6_c_scale,w_1400.jpg') }}">
            <img class="w-full h-full object-cover object-center"
                 src="{{ asset('img/2150801430_hxb0a6_c_scale,w_1400.jpg') }}"
                 alt="Equipo oftalmológico moderno en un entorno clínico.">
        </picture>
        <div class="absolute inset-0 bg-black/20"></div> <!-- Ligera capa negra sobre la imagen -->
    </div>

    <!-- Contenedor del texto y botones -->
    <div class="relative h-full z-10 flex items-center justify-center bg-black/40">
        <div class="max-w-3xl mx-auto text-center px-4 py-4 sm:px-6 sm:py-6 md:px-8 md:py-8"> <!-- Padding completo aplicado directamente al contenido -->
            <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl m-4 font-extrabold tracking-tight text-white">Atención Especializada para el Control del Glaucoma</h1>
            <p class="text-lg sm:text-lg md:text-xl text-gray-300">Cuidamos tu salud visual con tecnología de vanguardia y un enfoque humano.</p>
            <div class="mt-10 flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                <x-button href="/servicios" variant="primary" class="w-full sm:w-auto">Nuestros Servicios</x-button>
                <x-button href="/quienes-somos" variant="secondary" class="w-full sm:w-auto">Sobre Nosotros</x-button>
            </div>
        </div>
    </div>
</div>
