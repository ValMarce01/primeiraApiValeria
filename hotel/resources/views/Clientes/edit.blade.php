@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>

    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
        @csrf
        @method('PUT')

        @include('clientes.partials.form')

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
