@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Novo Cliente</h1>

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf

        @include('clientes.partials.form')

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
