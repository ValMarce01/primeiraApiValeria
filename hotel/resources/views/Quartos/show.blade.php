<x-app-layout>
    <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg">
            <div class="p-6">
                <h2 class="text-2xl font-bold mb-6 text-gray-900 dark:text-white">
                    Detalhes do Quarto
                </h2>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Número:</strong>
                    {{ $quarto->numero }}
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Tipo:</strong>
                    {{ $quarto->tipo }}
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Descrição:</strong>
                    {{ $quarto->descricao }}
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Preço:</strong>
                    R$ {{ number_format($quarto->preco, 2, ',', '.') }}
                </div>

                <div class="mb-4">
                    <strong class="text-gray-700 dark:text-gray-300">Status:</strong>
                    {{ $quarto->status }}
                </div>

                <div class="flex gap-4 mt-6">
                    <a href="{{ route('quartos.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                        Voltar
                    </a>
                    <a href="{{ route('quartos.edit', $quarto->id) }}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                        Editar
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
