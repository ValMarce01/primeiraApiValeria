<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">
                    Detalhes da Reserva
                </h2>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Nome do Cliente:</strong>
                    {{ $reserva->nome_cliente }}
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">E-mail do Cliente:</strong>
                    {{ $reserva->email_cliente }}
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Quarto:</strong>
                    {{ $reserva->quarto->numero }} - {{ $reserva->quarto->tipo }}
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Check-in:</strong>
                    {{ \Carbon\Carbon::parse($reserva->data_checkin)->format('d/m/Y') }}
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Check-out:</strong>
                    {{ \Carbon\Carbon::parse($reserva->data_checkout)->format('d/m/Y') }}
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Status:</strong>
                    {{ $reserva->status }}
                </div>

                <div class="flex gap-4 mt-6">
                    <a href="{{ route('reservas.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                        Voltar
                    </a>
                    <a href="{{ route('reservas.edit', $reserva->id) }}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                        Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
