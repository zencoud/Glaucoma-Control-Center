<div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-xl font-semibold text-primary tracking-wide">Nuestros Servicios</h2>
            <p class="mt-8 text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">Un enfoque integral para tu visión</p>
        </div>
        <div class="mt-12 grid gap-8 md:grid-cols-3">
            <x-home.service-card
                title="Prevención"
                description="La clave para un futuro visual claro. Mediante revisiones exhaustivas y tecnología de punta, identificamos factores de riesgo y establecemos un plan proactivo para proteger tu visión a largo plazo."
            >
                <x-slot name="icon">
                    <x-icons.check-circle class="h-8 w-8" />
                </x-slot>
            </x-home.service-card>
            <x-home.service-card
                title="Diagnóstico"
                description="Precisión y certeza para tu tranquilidad. Utilizamos pruebas diagnósticas avanzadas para detectar el glaucoma en sus etapas más tempranas, permitiendo un tratamiento oportuno y eficaz."
            >
                <x-slot name="icon">
                    <x-icons.document-text class="h-8 w-8" />
                </x-slot>
            </x-home.service-card>
            <x-home.service-card
                title="Tratamiento Integral"
                description="Soluciones personalizadas para controlar el glaucoma. Desde tratamientos médicos hasta procedimientos láser y quirúrgicos de vanguardia, diseñamos un plan a tu medida para gestionar la enfermedad y preservar tu vista."
            >
                <x-slot name="icon">
                    <x-icons.heart class="h-8 w-8" />
                </x-slot>
            </x-home.service-card>
        </div>
    </div>
</div>
