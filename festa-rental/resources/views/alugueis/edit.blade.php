@extends('layouts.app')

@section('title', 'Editar Aluguel')

@section('content')
<div class="d-flex justify-content-center mb-4">
    <div class="p-4 rounded-4 shadow text-white text-center" style="background: linear-gradient(135deg, #198754, #28a745); min-width: 300px;">
        <h1 class="mb-0">
            <i class="bi bi-pencil-square me-2"></i>Editar  Aluguel
        </h1>
    </div>
</div>

<form action="{{ route('alugueis.update', $aluguel->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="equipamento_id" class="form-label text-white bg-success px-3 py-2 rounded-pill fw-semibold fs-6 d-inline-block">Equipamento</label>
        <select name="equipamento_id" id="equipamento_id" class="form-select">
            @foreach($equipamentos as $equipamento)
            <option value="{{ $equipamento->id }}" {{ $aluguel->equipamento_id == $equipamento->id ? 'selected' : '' }}>
                {{ $equipamento->nome }}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
    <label for="data_inicio" class="form-label text-white bg-success px-3 py-2 rounded-pill fw-semibold fs-6 d-inline-block">Data de Início</label>
        <input type="date" name="data_inicio" id="data_inicio" class="form-control" value="{{ $aluguel->data_inicio }}" required>
    </div>
    <div class="mb-3">
    <label for="data_fim" class="form-label text-white bg-success px-3 py-2 rounded-pill fw-semibold fs-6 d-inline-block"> Data de Fim</label>
        <input type="date" name="data_fim" id="data_fim" class="form-control" value="{{ $aluguel->data_fim }}" required>
    </div>
    <div class="d-flex gap-3 mt-3">
    <button type="submit" class="btn btn-success px-4 py-2 fw-semibold shadow-sm">
        <i class="bi bi-check-circle me-2"></i>Atualizar
    </button>

    <a href="{{ route('alugueis.index') }}" class="btn btn-outline-success px-4 py-2 fw-semibold shadow-sm">
        <i class="bi bi-arrow-left me-2"></i>Voltar
    </a>
    </div>
</form>
@endsection

