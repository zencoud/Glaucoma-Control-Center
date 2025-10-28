@extends('admin.layout')

@section('title', 'Gestión de Contactos')

@section('content')
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Gestión de Contactos</h1>
                    <p class="mt-2 text-gray-600">Administra los mensajes recibidos del formulario de contacto del sitio web</p>
                </div>
                <div class="flex space-x-4">
                    <div class="text-sm text-gray-500">
                        Última actualización: {{ now()->format('d/m/Y H:i') }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-2 bg-blue-100 rounded-lg">
                        <x-icons.envelope class="w-6 h-6 text-blue-600" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Total de Mensajes</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ $stats['total'] }}</p>
                        <p class="text-xs text-gray-500">Todos los contactos</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-2 bg-yellow-100 rounded-lg">
                        <x-icons.clock class="w-6 h-6 text-yellow-600" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Pendientes</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ $stats['unprocessed'] }}</p>
                        <p class="text-xs text-gray-500">Sin procesar</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-2 bg-green-100 rounded-lg">
                        <x-icons.check class="w-6 h-6 text-green-600" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Procesados</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ $stats['processed'] }}</p>
                        <p class="text-xs text-gray-500">Email enviado</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-2 bg-indigo-100 rounded-lg">
                        <x-icons.chart-bar class="w-6 h-6 text-indigo-600" />
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-medium text-gray-600">Esta Semana</p>
                        <p class="text-2xl font-semibold text-gray-900">{{ $stats['this_week'] }}</p>
                        <p class="text-xs text-gray-500">Últimos 7 días</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress Bar -->
        @if($stats['total'] > 0)
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">Progreso de Procesamiento</h3>
                <span class="text-sm text-gray-500">{{ round(($stats['processed'] / $stats['total']) * 100, 1) }}% completado</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-3">
                <div class="bg-gradient-to-r from-green-500 to-green-600 h-3 rounded-full transition-all duration-300" 
                     style="width: {{ ($stats['processed'] / $stats['total']) * 100 }}%"></div>
            </div>
            <div class="flex justify-between text-sm text-gray-500 mt-2">
                <span>{{ $stats['processed'] }} procesados</span>
                <span>{{ $stats['unprocessed'] }} pendientes</span>
            </div>
        </div>
        @endif

        <!-- Recent Contacts -->
        @if($recentContacts->count() > 0)
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Contactos Recientes</h3>
            <div class="space-y-3">
                @foreach($recentContacts as $contact)
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                    <div class="flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            @if($contact->email_sent)
                                <x-icons.check class="w-5 h-5 text-green-600" />
                            @else
                                <x-icons.clock class="w-5 h-5 text-yellow-600" />
                            @endif
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-900">{{ $contact->name }}</p>
                            <p class="text-sm text-gray-500">{{ $contact->email }}</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="text-xs text-gray-500">{{ $contact->created_at->format('d/m H:i') }}</span>
                        <a href="{{ route('admin.contacts.show', $contact) }}" 
                           class="text-blue-600 hover:text-blue-800 text-sm font-medium">
                            Ver
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Contacts Table -->
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Lista de Contactos</h3>
            </div>
            
            @if($contacts->count() > 0)
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contacto</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Asunto</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Estado</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($contacts as $contact)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div>
                                            <div class="text-sm font-medium text-gray-900">{{ $contact->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $contact->email }}</div>
                                            @if($contact->phone)
                                                <div class="text-sm text-gray-500">{{ $contact->phone }}</div>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{ $contact->subject ?: 'Sin asunto' }}
                                        </div>
                                        <div class="text-sm text-gray-500 truncate max-w-xs">
                                            {{ Str::limit($contact->message, 50) }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
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
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $contact->created_at->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.contacts.show', $contact) }}" 
                                               class="inline-flex items-center px-2 py-1 text-blue-600 hover:text-blue-900 hover:bg-blue-50 rounded transition-colors"
                                               title="Ver detalles del contacto">
                                                <x-icons.eye class="w-4 h-4" />
                                            </a>
                                            
                                            @if(!$contact->email_sent)
                                                <form action="{{ route('admin.contacts.resend-email', $contact) }}" method="POST" class="inline">
                                                    @csrf
                                                    <button type="submit" 
                                                            class="inline-flex items-center px-2 py-1 text-green-600 hover:text-green-900 hover:bg-green-50 rounded transition-colors"
                                                            title="Reenviar email al administrador">
                                                        <x-icons.refresh class="w-4 h-4" />
                                                    </button>
                                                </form>
                                                
                                                <form action="{{ route('admin.contacts.mark-processed', $contact) }}" method="POST" class="inline">
                                                    @csrf
                                                    <button type="submit" 
                                                            class="inline-flex items-center px-2 py-1 text-purple-600 hover:text-purple-900 hover:bg-purple-50 rounded transition-colors"
                                                            title="Marcar como procesado">
                                                        <x-icons.check-circle class="w-4 h-4" />
                                                    </button>
                                                </form>
                                            @endif
                                            
                                            <form action="{{ route('admin.contacts.destroy', $contact) }}" method="POST" class="inline" 
                                                  onsubmit="return confirm('¿Estás seguro de eliminar este contacto?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="inline-flex items-center px-2 py-1 text-red-600 hover:text-red-900 hover:bg-red-50 rounded transition-colors"
                                                        title="Eliminar contacto">
                                                    <x-icons.trash class="w-4 h-4" />
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <!-- Pagination -->
                <div class="px-6 py-4 border-t border-gray-200">
                    {{ $contacts->links() }}
                </div>
            @else
                <div class="px-6 py-12 text-center">
                    <x-icons.envelope class="mx-auto h-12 w-12 text-gray-400" />
                    <h3 class="mt-2 text-sm font-medium text-gray-900">No hay contactos</h3>
                    <p class="mt-1 text-sm text-gray-500">Aún no se han recibido mensajes de contacto.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
