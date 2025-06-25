<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Editar Quarto</h2>
    </x-slot>

    <div class="py-4 px-6">
        <form action="{{ route('quartos.update', $quarto->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label>Nome</label>
                <input type="text" name="nome" value="{{ $quarto->nome }}" required>
            </div>

            <div>
                <label>Descrição</label>
                <input type="text" name="descricao" value="{{ $quarto->descricao }}" required>
            </div>

            <div>
                <label>Capacidade</label>
                <input type="number" name="capacidade" value="{{ $quarto->capacidade }}" required>
            </div>

            <button type="submit">Atualizar</button>
        </form>
    </div>
</x-app-layout>
