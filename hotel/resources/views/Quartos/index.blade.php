<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Lista de Quartos</h2>
    </x-slot>

    <div class="py-4 px-6">
        <a href="{{ route('quartos.create') }}" class="btn btn-primary mb-4">Novo Quarto</a>

        <table class="table-auto w-full border">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Capacidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($quartos as $quarto)
                    <tr>
                        <td>{{ $quarto->nome }}</td>
                        <td>{{ $quarto->descricao }}</td>
                        <td>{{ $quarto->capacidade }}</td>
                        <td>
                            <a href="{{ route('quartos.edit', $quarto->id) }}">Editar</a>
                            <form action="{{ route('quartos.destroy', $quarto->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
