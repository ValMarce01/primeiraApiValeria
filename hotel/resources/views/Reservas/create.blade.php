
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nova Reserva</h1>

    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Quarto:</label>
            <select name="quarto_id" class="form-control" required>
                @foreach($quartos as $quarto)
                    <option value="{{ $quarto->id }}">{{ $quarto->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-2">
            <label>Data Início:</label>
            <input type="date" name="data_inicio" class="form-control" required>
        </div>

        <div class="form-group mt-2">
            <label>Data Fim:</label>
            <input type="date" name="data_fim" class="form-control" required>
        </div>

        <button class="btn btn-success mt-3">Salvar</button>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary mt-3">Voltar</a>
    </form>
</div>
@endsection
