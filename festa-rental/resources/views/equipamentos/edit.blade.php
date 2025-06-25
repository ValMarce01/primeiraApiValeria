@extends('layouts.app')

@section('title', 'Editar Equipamento')

@section('content')
<div class="d-flex justify-content-center mb-4">
    <div class="p-4 rounded-4 shadow text-white text-center" style="background: linear-gradient(135deg, #198754, #28a745); min-width: 300px;">
        <h1 class="mb-0">
            <i class="bi bi-pencil-square me-2"></i>Editar Equipamento
        </h1>
    </div>
</div>

<form action="{{ route('equipamentos.update', $equipamento->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="nome" class="form-label text-white bg-success px-3 py-2 rounded-pill fw-semibold fs-6 d-inline-block">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $equipamento->nome }}" class="form-control" required>
    </div>
    <div class="mb-3">
    <label for="tamanho" class="form-label text-white bg-success px-3 py-2 rounded-pill fw-semibold fs-6 d-inline-block">Tamanho</label>
        <input type="text" name="tamanho" id="tamanho" value="{{ $equipamento->tamanho }}" class="form-control" required>
    </div>
    <div class="mb-3">
    <label for="valor_diaria" class="form-label text-white bg-success px-3 py-2 rounded-pill fw-semibold fs-6 d-inline-block">Valor da Diária</label>
        <input type="number" step="0.01" name="valor_diaria" id="valor_diaria" value="{{ $equipamento->valor_diaria }}" class="form-control" required>
    </div>
    <div class="d-flex gap-3 mt-3">
    <button type="submit" class="btn btn-success px-4 py-2 fw-semibold shadow-sm">
        <i class="bi bi-check-circle me-2"></i>Atualizar
    </button>

    <a href="{{ route('equipamentos.index') }}" class="btn btn-outline-success px-4 py-2 fw-semibold shadow-sm">
        <i class="bi bi-arrow-left me-2"></i>Voltar
    </a>
    </div>
</form>
@endsection