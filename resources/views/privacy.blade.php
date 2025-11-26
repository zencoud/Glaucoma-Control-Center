@extends('layouts.app')

@section('title', 'Aviso de Privacidad | Glaucoma Control Center - Especialistas en Salud Visual')
@section('description', 'Aviso de privacidad de Glaucoma Control Center. Conoce cómo protegemos y manejamos tu información personal y médica de manera confidencial y segura.')
@section('keywords', 'aviso de privacidad, protección de datos, confidencialidad, información médica, privacidad, seguridad, datos personales, RGPD')
@section('og_title', 'Aviso de Privacidad | Glaucoma Control Center - Especialistas en Salud Visual')
@section('og_description', 'Aviso de privacidad de Glaucoma Control Center. Conoce cómo protegemos y manejamos tu información personal y médica de manera confidencial y segura.')
@section('og_image', url('/img/glaucoma-control-center-logo.png'))
@section('twitter_title', 'Aviso de Privacidad | Glaucoma Control Center - Especialistas en Salud Visual')
@section('twitter_description', 'Aviso de privacidad de Glaucoma Control Center. Conoce cómo protegemos y manejamos tu información personal y médica de manera confidencial y segura.')
@section('twitter_image', url('/img/glaucoma-control-center-logo.png'))

@section('content')
    <x-page-header
        text="Aviso de Privacidad"
        :image="null"
        :breadcrumbs="[
            ['text' => 'Inicio', 'url' => '/'],
            ['text' => 'Aviso de Privacidad']
        ]"
    />

    <!-- Main Content -->
    <div class="bg-white">
        <div class="max-w-4xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="prose prose-lg max-w-none">
                <h2 class="text-2xl font-bold text-primary mb-6">Información General</h2>
                <p class="text-gray-600 mb-6">
                    En Glaucoma Control Center, nos comprometemos a proteger la privacidad y confidencialidad de la información personal de nuestros pacientes. Este aviso de privacidad describe cómo recopilamos, utilizamos y protegemos su información personal.
                </p>

                <h2 class="text-2xl font-bold text-primary mb-6">Información que Recopilamos</h2>
                <p class="text-gray-600 mb-4">
                    Recopilamos información personal que usted nos proporciona directamente, incluyendo:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                    <li>Nombre completo y datos de contacto</li>
                    <li>Información médica y de salud</li>
                    <li>Historial médico y de tratamientos</li>
                    <li>Información de seguros médicos</li>
                    <li>Datos de contacto de emergencia</li>
                </ul>

                <h2 class="text-2xl font-bold text-primary mb-6">Uso de la Información</h2>
                <p class="text-gray-600 mb-4">
                    Utilizamos su información personal para:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                    <li>Proporcionar servicios médicos y de atención oftalmológica</li>
                    <li>Programar citas y recordatorios</li>
                    <li>Comunicarnos con usted sobre su tratamiento</li>
                    <li>Mantener registros médicos precisos</li>
                    <li>Cumplir con obligaciones legales y regulatorias</li>
                </ul>

                <h2 class="text-2xl font-bold text-primary mb-6">Protección de la Información</h2>
                <p class="text-gray-600 mb-6">
                    Implementamos medidas de seguridad técnicas, administrativas y físicas para proteger su información personal contra acceso no autorizado, alteración, divulgación o destrucción. Su información médica se mantiene estrictamente confidencial y solo es accesible por personal autorizado.
                </p>

                <h2 class="text-2xl font-bold text-primary mb-6">Compartir Información</h2>
                <p class="text-gray-600 mb-6">
                    No vendemos, alquilamos ni compartimos su información personal con terceros, excepto cuando sea necesario para proporcionar servicios médicos, cumplir con la ley, o con su consentimiento explícito.
                </p>

                <h2 class="text-2xl font-bold text-primary mb-6">Sus Derechos</h2>
                <p class="text-gray-600 mb-4">
                    Usted tiene derecho a:
                </p>
                <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                    <li>Acceder a su información personal</li>
                    <li>Solicitar correcciones a su información</li>
                    <li>Solicitar la eliminación de su información (sujeto a obligaciones legales)</li>
                    <li>Retirar su consentimiento en cualquier momento</li>
                    <li>Recibir una copia de este aviso de privacidad</li>
                </ul>

                <h2 class="text-2xl font-bold text-primary mb-6">Contacto</h2>
                <p class="text-gray-600 mb-6">
                    Si tiene preguntas sobre este aviso de privacidad o sobre cómo manejamos su información personal, puede contactarnos:
                </p>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <p class="text-gray-600 mb-2"><strong>Glaucoma Control Center</strong></p>
                    <p class="text-gray-600 mb-2">Teléfono: <a href="tel:3343024883" class="text-primary hover:text-primary/80">33 4302 4883</a></p>
                    <p class="text-gray-600 mb-2">Email: <a href="mailto:ar.oftalmo@glaucomacc.com.mx" class="text-primary hover:text-primary/80">ar.oftalmo@glaucomacc.com.mx</a></p>
                </div>
                <br>
                <p>
                    <strong>Número de ingreso:</strong>
                    <br>
                    2514102002A00478
                </p>

                <div class="mt-8 pt-6 border-t border-gray-200">
                    <p class="text-sm text-gray-500">
                        <strong>Última actualización:</strong> {{ date('d/m/Y') }}
                    </p>
                    <p class="text-sm text-gray-500 mt-2">
                        Este aviso de privacidad puede ser actualizado periódicamente. Le recomendamos revisarlo regularmente.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <x-home.cta-section />
@endsection
