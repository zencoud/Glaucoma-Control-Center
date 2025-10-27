<header x-data="{ open: false }" class="bg-white shadow-sm">
    <!-- Top row for desktop -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="hidden sm:flex justify-between items-center py-2">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/">
                    <img class="w-36 h-auto" src="{{ asset('img/glaucoma-control-center-logo.png') }}" alt="Glaucoma Control Center Logo">
                </a>
            </div>

            <!-- Desktop CTA Button -->
            <div>
                <x-button href="/contacto" variant="primary" class="inline-flex items-center">
                    <x-icons.phone class="-ml-1 mr-2 h-5 w-5" />
                    Contacto
                </x-button>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="sm:hidden flex justify-between items-center px-4 py-3">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="/">
                <img class="w-32 h-auto" src="{{ asset('img/glaucoma-control-center-logo.png') }}" alt="Glaucoma Control Center Logo">
            </a>
        </div>

        <!-- Mobile Buttons -->
        <div class="flex items-center space-x-2">
            <x-button href="/contacto" variant="primary" class="!py-2 !px-3">
                <x-icons.phone class="h-5 w-5" />
            </x-button>
            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-primary">
                <span class="sr-only">Abrir menú principal</span>
                <x-icons.bars-3 ::class="{'hidden': open, 'block': !open}" class="h-6 w-6" />
                <x-icons.x-mark ::class="{'hidden': !open, 'block': open}" class="h-6 w-6" />
            </button>
        </div>
    </div>

    <!-- Main Navigation Bar (Desktop) -->
    <nav class="hidden sm:block bg-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                @php
                    $navLinks = [
                        '/' => 'Inicio',
                        'quienes-somos' => '¿Quiénes somos?',
                        'mision-vision' => 'Misión y visión',
                        'valores' => 'Valores',
                        'servicios' => 'Servicios',
                    ];
                @endphp

                @foreach ($navLinks as $route => $title)
                    <a href="{{ url($route) }}"
                       class="relative text-white/80 hover:text-white inline-flex items-center px-1 pt-1 text-base font-bold transition-colors duration-300 group {{ request()->is($route) ? 'text-white' : '' }}">
                        <span>{{ $title }}</span>
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 ease-out {{ request()->is($route) ? 'scale-x-100' : '' }}">
                        </span>
                    </a>
                @endforeach
            </div>
        </div>
    </nav>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="open" x-transition class="sm:hidden bg-white border-t border-gray-200">
        <div class="pt-2 pb-3 space-y-1">
            <a href="/" class="{{ request()->is('/') ? 'bg-secondary/10 border-l-4 border-secondary text-primary font-bold' : 'border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} block pl-3 pr-4 py-2 text-base font-medium">Inicio</a>
            <a href="/quienes-somos" class="{{ request()->is('quienes-somos') ? 'bg-secondary/10 border-l-4 border-secondary text-primary font-bold' : 'border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} block pl-3 pr-4 py-2 text-base font-medium">¿Quiénes somos?</a>
            <a href="/mision-vision" class="{{ request()->is('mision-vision') ? 'bg-secondary/10 border-l-4 border-secondary text-primary font-bold' : 'border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} block pl-3 pr-4 py-2 text-base font-medium">Misión y visión</a>
            <a href="/valores" class="{{ request()->is('valores') ? 'bg-secondary/10 border-l-4 border-secondary text-primary font-bold' : 'border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} block pl-3 pr-4 py-2 text-base font-medium">Valores</a>
            <a href="/servicios" class="{{ request()->is('servicios') ? 'bg-secondary/10 border-l-4 border-secondary text-primary font-bold' : 'border-l-4 border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800' }} block pl-3 pr-4 py-2 text-base font-medium">Servicios</a>
        </div>
    </div>
</header>
