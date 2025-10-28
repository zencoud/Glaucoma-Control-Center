@extends('admin.layout')

@section('title', 'Configuración')

@section('content')
<div class="py-6">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Configuración del Sistema</h1>
            <p class="mt-2 text-gray-600">Gestiona la configuración general del sistema de contactos</p>
        </div>

        <!-- Email Configuration -->
        <div class="bg-white shadow rounded-lg mb-8">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Configuración de Email</h3>
                <p class="mt-1 text-sm text-gray-500">Configura el email destinatario para los mensajes de contacto</p>
            </div>
            
            <div class="px-6 py-6">
                <form action="{{ route('admin.settings.update-admin-email') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-6">
                        <div>
                            <label for="admin_email" class="block text-sm font-medium text-gray-700">
                                Email Administrativo
                            </label>
                            <div class="mt-1">
                                <input type="email" 
                                       name="admin_email" 
                                       id="admin_email"
                                       value="{{ $adminEmail }}"
                                       class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary sm:text-sm @error('admin_email') border-red-300 @enderror"
                                       placeholder="admin@ejemplo.com">
                            </div>
                            @error('admin_email')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                            <p class="mt-2 text-sm text-gray-500">
                                Este email recibirá las notificaciones de los mensajes de contacto enviados desde el sitio web.
                            </p>
                        </div>
                        
                        <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                            <div>
                                <h4 class="text-sm font-medium text-gray-900">Estado Actual</h4>
                                <p class="text-sm text-gray-500">
                                    @if($adminEmail)
                                        Email configurado: <span class="font-mono text-primary">{{ $adminEmail }}</span>
                                    @else
                                        <span class="text-yellow-600">No hay email configurado</span>
                                    @endif
                                </p>
                            </div>
                            <div class="flex-shrink-0">
                                @if($adminEmail)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <x-icons.check class="w-3 h-3 mr-1" />
                                        Configurado
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <x-icons.clock class="w-3 h-3 mr-1" />
                                        Sin configurar
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-6 flex justify-end">
                        <button type="submit" 
                                class="inline-flex items-center px-4 py-2 bg-primary text-white text-sm font-medium rounded-md hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors">
                            <x-icons.check class="w-4 h-4 mr-2" />
                            Guardar Configuración
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Email Settings Info -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-6">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-blue-800">
                        Información sobre la configuración de email
                    </h3>
                    <div class="mt-2 text-sm text-blue-700">
                        <ul class="list-disc list-inside space-y-1">
                            <li>El email configurado aquí recibirá una notificación cada vez que alguien envíe un mensaje desde el formulario de contacto.</li>
                            <li>Los mensajes se envían automáticamente cuando se recibe un nuevo contacto.</li>
                            <li>Si no hay email configurado, los contactos se guardan en la base de datos pero no se envían notificaciones.</li>
                            <li>Puedes cambiar esta configuración en cualquier momento.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
