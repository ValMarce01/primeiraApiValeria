<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
         {{ __('Hotel') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-blue-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h1 class="text-3xl font-extrabold text-blue-800 dark:text-blue-300 mb-4">Bem-vindo, {{ Auth::user()->name }}!</h1>
                <p class="mb-6 text-gray-700 dark:text-gray-200">Gerencie com eficiência seu hotel, clientes, quartos e reservas.</p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Clientes -->
                    <a href="{{ route('clientes.index') }}" class="flex items-center justify-center flex-col bg-blue-600 text-white py-6 rounded-2xl hover:bg-blue-700 transition shadow-md">
                        <svg class="w-10 h-10 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A4 4 0 006 21h12a4 4 0 00.879-3.196M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span class="font-medium text-lg">Clientes</span>
                    </a>

                    <!-- Quartos -->
                    <a href="{{ route('quartos.index') }}" class="flex items-center justify-center flex-col bg-green-600 text-white py-6 rounded-2xl hover:bg-green-700 transition shadow-md">
                        <svg class="w-10 h-10 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v13h18V7H3zM16 3v4M8 3v4m-5 8h18" />
                        </svg>
                        <span class="font-medium text-lg">Quartos</span>
                    </a>

                    <!-- Reservas -->
                    <a href="{{ route('reservas.index') }}" class="flex items-center justify-center flex-col bg-indigo-600 text-white py-6 rounded-2xl hover:bg-indigo-700 transition shadow-md">
                        <svg class="w-10 h-10 mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3M3 11h18M5 19h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span class="font-medium text-lg">Reservas</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
