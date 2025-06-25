
@extends('layouts.app')

@section('title', 'Lista de Aluguéis')

@section('content')
<!-- Título com estilo personalizado -->
<div class="d-flex justify-content-center mb-4">
    <div class="p-4 rounded-4 shadow text-white text-center" style="background: linear-gradient(135deg, #198754, #28a745); min-width: 300px;">
        <h1 class="mb-0">
            <i class="bi bi-card-list me-2"></i>Lista de Aluguéis
        </h1>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Equipamento</th>
            <th>Data de Início</th>
            <th>Data de Fim</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($alugueis as $aluguel)
        <tr>
            <td>{{ $aluguel->id }}</td>
            <td>{{ $aluguel->equipamento->nome }}</td>
            <td>{{ $aluguel->data_inicio->format('d/m/Y') }}</td>
            <td>{{ $aluguel->data_fim->format('d/m/Y') }}</td>
            <td>
                <a href="{{ route('alugueis.show', $aluguel->id) }}" class="btn btn-success btn-sm mb-1">Ver</a>
                <a href="{{ route('alugueis.edit', $aluguel->id) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('alugueis.destroy', $aluguel->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('alugueis.create') }}" class="btn btn-success mb-3">Adicionar Novo Aluguel</a>
@endsection