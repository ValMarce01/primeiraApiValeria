@extends('layouts.app')

@section('title', 'Detalhes do Aluguel')

@section('content')
<div class="d-flex justify-content-center mb-4">
    <div class="p-4 rounded-4 shadow text-white text-center" style="background: linear-gradient(135deg, #198754, #28a745); min-width: 300px;">
        <h1 class="mb-0">
            <i class="bi bi-info-circle-fill me-2"></i>Detalhes do Aluguel
        </h1>
    </div>
</div>
<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body px-4 py-4">
        <h5 class="card-title fw-bold mb-3 text-success">
            Equipamento: {{ $aluguel->equipamento->nome }}
        </h5>

        <p class="card-text mb-2">
            <strong class="text-dark">Data de Início:</strong>
            <span class="text-muted">{{ \Carbon\Carbon::parse($aluguel->data_inicio)->format('d/m/Y') }}</span>
        </p>

        <p class="card-text mb-4">
            <strong class="text-dark">Data de Fim:</strong>
            <span class="text-muted">{{ \Carbon\Carbon::parse($aluguel->data_fim)->format('d/m/Y') }}</span>
        </p>

        <div class="d-flex flex-wrap gap-2">
            <a href="{{ route('alugueis.edit', $aluguel->id) }}" class="btn btn-warning">Editar</a>

            <form action="{{ route('alugueis.destroy', $aluguel->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
            <a href="{{ route('alugueis.index') }}" class="btn btn-outline-success px-4 py-2 fw-semibold shadow-sm">
            <i class="bi bi-arrow-left me-2"></i>Voltar
            </a>
        </div>
    </div>
</div>

</div>
@endsection