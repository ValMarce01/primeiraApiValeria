@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Reserva</h1>

    <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Quarto:</label>
            <select name="quarto_id" class="form-control" required>
                @foreach($quartos as $quarto)
                    <option value="{{ $quarto->id }}" {{ $quarto->id == $reserva->quarto_id ? 'selected' : '' }}>
                        {{ $quarto->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group mt-2">
            <label>Data Início:</label>
            <input type="date" name="data_inicio" class="form-control" value="{{ $reserva->data_inicio }}" required>
        </div>

        <div class="form-group mt-2">
            <label>Data Fim:</label>
            <input type="date" name="data_fim" class="form-control" value="{{ $reserva->data_fim }}" required>
        </div>

        <button class="btn btn-primary mt-3">Atualizar</button>
        <a href="{{ route('reservas.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>
</div>
@endsection