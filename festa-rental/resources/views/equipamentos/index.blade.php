@extends('layouts.app')

@section('title', 'Equipamentos')

@section('content')
<div class="d-flex justify-content-center mb-4">
    <div class="p-4 rounded-4 shadow text-white text-center" style="background: linear-gradient(135deg, #198754, #28a745); min-width: 300px;">
        <h1 class="mb-0">
            <i class="bi bi-card-list me-2"></i>Lista de Equipamentos
        </h1>
    </div>
</div>

<table class="table table-striped table-hover">
    <thead class="table-success">
        <tr>
            <th>Nome</th>
            <th>Tamanho</th>
            <th>Valor Diária</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($equipamentos as $equipamento)
        <tr>
            <td>{{ $equipamento->nome }}</td>
            <td>{{ $equipamento->tamanho }}</td>
            <td>R$ {{ number_format($equipamento->valor_diaria, 2, ',', '.') }}</td>
            <td>
                <a href="{{ route('equipamentos.show', $equipamento->id) }}" class="btn btn-success btn-sm mb-1">Ver</a>
                <a href="{{ route('equipamentos.edit', $equipamento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('equipamentos.destroy', $equipamento->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('equipamentos.create') }}" class="btn btn-success mb-3">Adicionar Equipamento</a>
@endsection
