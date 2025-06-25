<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Cadastrar Quarto</h2>
    </x-slot>

    <div class="py-4 px-6">
        <form action="{{ route('quartos.store') }}" method="POST">
            @csrf

            <div>
                <label>Nome</label>
                <input type="text" name="nome" required>
            </div>

            <div>
                <label>Descrição</label>
                <input type="text" name="descricao" required>
            </div>

            <div>
                <label>Capacidade</label>
                <input type="number" name="capacidade" required>
            </div>

            <button type="submit">Salvar</button>
        </form>
    </div>
</x-app-layout>
