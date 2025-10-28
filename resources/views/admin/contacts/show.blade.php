@extends('admin.layout')

@section('title', 'Ver Contacto')

@section('content')
<div class="py-6">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Detalles del Contacto</h1>
                    <p class="mt-2 text-gray-600">Información completa del mensaje recibido</p>
                </div>
                <div class="flex space-x-4">
                    <a href="{{ route('admin.contacts.index') }}" 
                       class="inline-flex items-center px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition-colors">
                        <x-icons.arrow-left class="w-4 h-4 mr-2" />
                        Volver
                    </a>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Contact Info -->
            <div class="lg:col-span-1">
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Información del Contacto</h3>
                    
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nombre</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $contact->name }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Email</label>
                            <a href="mailto:{{ $contact->email }}" class="mt-1 text-sm text-blue-600 hover:text-blue-800">
                                {{ $contact->email }}
                            </a>
                        </div>
                        
                        @if($contact->phone)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <a href="tel:{{ $contact->phone }}" class="mt-1 text-sm text-blue-600 hover:text-blue-800">
                                {{ $contact->phone }}
                            </a>
                        </div>
                        @endif
                        
                        @if($contact->subject)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Asunto</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $contact->subject }}</p>
                        </div>
                        @endif
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Fecha de Envío</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $contact->created_at->format('d/m/Y H:i') }}</p>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Estado</label>
                            <div class="mt-1">
                                @if($contact->email_sent)
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                        <x-icons.check class="w-3 h-3 mr-1" />
                                        Procesado
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                        <x-icons.clock class="w-3 h-3 mr-1" />
                                        Pendiente
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        @if($contact->email_sent_at)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Procesado el</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $contact->email_sent_at->format('d/m/Y H:i') }}</p>
                        </div>
                        @endif
                        
                        @if($contact->email_response)
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Respuesta del Sistema</label>
                            <p class="mt-1 text-sm text-gray-900">{{ $contact->email_response }}</p>
                        </div>
                        @endif
                    </div>
                </div>
                
                <!-- Actions -->
                <div class="mt-6 bg-white shadow rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Acciones</h3>
                    
                    <div class="space-y-3">
                        @if(!$contact->email_sent)
                            <form action="{{ route('admin.contacts.resend-email', $contact) }}" method="POST">
                                @csrf
                                <button type="submit" 
                                        class="w-full inline-flex justify-center items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                                    <x-icons.paper-airplane class="w-4 h-4 mr-2" />
                                    Reenviar Email
                                </button>
                            </form>
                            
                            <form action="{{ route('admin.contacts.mark-processed', $contact) }}" method="POST">
                                @csrf
                                <button type="submit" 
                                        class="w-full inline-flex justify-center items-center px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition-colors">
                                    <x-icons.check class="w-4 h-4 mr-2" />
                                    Marcar como Procesado
                                </button>
                            </form>
                        @endif
                        
                        <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" 
                              onsubmit="return confirm('¿Estás seguro de eliminar este contacto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="w-full inline-flex justify-center items-center px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors">
                                <x-icons.trash class="w-4 h-4 mr-2" />
                                Eliminar Contacto
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Message Content -->
            <div class="lg:col-span-2">
                <div class="bg-white shadow rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Mensaje</h3>
                    
                    <div class="prose max-w-none">
                        <div class="whitespace-pre-wrap text-gray-900 leading-relaxed">
                            {{ $contact->message }}
                        </div>
                    </div>
                </div>
                
                <!-- Quick Reply -->
                <div class="mt-6 bg-white shadow rounded-lg p-6">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Respuesta Rápida</h3>
                    
                    <form action="mailto:{{ $contact->email }}?subject=Re: {{ $contact->subject ?: 'Consulta' }}" method="get">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Asunto</label>
                                <input type="text" 
                                       value="Re: {{ $contact->subject ?: 'Consulta' }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                       readonly>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Para</label>
                                <input type="email" 
                                       value="{{ $contact->email }}"
                                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"
                                       readonly>
                            </div>
                        </div>
                        
                        <div class="mt-4">
                            <button type="submit" 
                                    class="inline-flex items-center px-4 py-2 bg-primary text-white rounded-md hover:bg-primary/90 transition-colors">
                                <x-icons.mail class="w-4 h-4 mr-2" />
                                Abrir Cliente de Email
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
