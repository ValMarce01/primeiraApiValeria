@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalhes do Cliente</h1>

    <div class="card">
        <div class="card-body">
            <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
            <p><strong>Email:</strong> {{ $cliente->email }}</p>
            <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
            <p><strong>Documento:</strong> {{ $cliente->documento }}</p>
        </div>
    </div>

    <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Voltar</a>
</div>
@endsection
