@extends('layouts.app')

@section('title', 'Iniciar Sesión - Administración')

@section('content')
<div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="flex justify-center">
            <img class="h-16 w-auto" src="{{ asset('img/glaucoma-control-center-logo.png') }}" alt="Glaucoma Control Center Logo">
        </div>
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
            Panel de Administración
        </h2>
        <p class="mt-2 text-center text-sm text-gray-600">
            Inicia sesión para gestionar la galería
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                
                <x-input 
                    name="email" 
                    type="email" 
                    label="Correo electrónico" 
                    required 
                    value="{{ old('email') }}"
                    error="{{ $errors->first('email') }}"
                />

                <x-input 
                    name="password" 
                    type="password" 
                    label="Contraseña" 
                    required
                    error="{{ $errors->first('password') }}"
                />

                <div class="flex items-center justify-between">
                    <x-input 
                        name="remember" 
                        type="checkbox" 
                        label="Recordarme"
                    />
                </div>

                <div>
                    <x-button as="button" variant="primary" class="w-full">
                        Iniciar Sesión
                    </x-button>
                </div>
            </form>

            @if ($errors->any())
                <div class="mt-6 bg-red-50 border border-red-200 rounded-md p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">
                                Error de autenticación
                            </h3>
                            <div class="mt-2 text-sm text-red-700">
                                <p>Las credenciales proporcionadas no son válidas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
