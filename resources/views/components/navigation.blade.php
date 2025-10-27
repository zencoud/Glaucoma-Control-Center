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
                <a href="/contacto" class="inline-flex items-center px-4 py-2 border border-primary text-sm font-medium rounded text-white bg-primary hover:bg-transparent hover:text-primary transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    <x-icons.phone class="-ml-1 mr-2 h-5 w-5" />
                    Contacto
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="sm:hidden flex justify-between items-center px-4 py-3">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <a href="/">
                <img class="w-40 h-auto" src="{{ asset('img/glaucoma-control-center-logo.png') }}" alt="Glaucoma Control Center Logo">
            </a>
        </div>

        <!-- Mobile Buttons -->
        <div class="flex items-center space-x-2">
            <a href="/contacto" class="inline-flex items-center px-3 py-2 border border-primary text-sm font-medium rounded text-white bg-primary hover:bg-transparent hover:text-primary transition-colors duration-300">
                <x-icons.phone class="h-5 w-5" />
            </a>
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
            <div class="flex justify-center space-x-8 h-12">
                <a href="/" class="{{ request()->is('/') ? 'text-white font-bold' : 'text-white/75 hover:text-white' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition-colors">Inicio</a>
                <a href="/quienes-somos" class="{{ request()->is('quienes-somos') ? 'text-white font-bold' : 'text-white/75 hover:text-white' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition-colors">¿Quiénes somos?</a>
                <a href="/mision-vision" class="{{ request()->is('mision-vision') ? 'text-white font-bold' : 'text-white/75 hover:text-white' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition-colors">Misión y visión</a>
                <a href="/valores" class="{{ request()->is('valores') ? 'text-white font-bold' : 'text-white/75 hover:text-white' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition-colors">Valores</a>
                <a href="/servicios" class="{{ request()->is('servicios') ? 'text-white font-bold' : 'text-white/75 hover:text-white' }} inline-flex items-center px-1 pt-1 text-sm font-medium transition-colors">Servicios</a>
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
