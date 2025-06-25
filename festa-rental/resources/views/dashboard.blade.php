@extends('layouts.app')

@section('title', 'Painel do Usuário')

@section('content')
<div class="container my-5">

   <!-- Saudação com destaque -->
<div class="row justify-content-center mb-5">
    <div class="col-md-8">
        <div class="card shadow-lg border-0 text-white" style="background: linear-gradient(135deg, #198754, #28a745);">
            <div class="card-body text-center py-5">
                <h2 class="display-6 mb-3">
                    <i class="bi bi-stars me-2"></i>Bem-vindo(a), <strong>{{ Auth::user()->name }}</strong>!
                </h2>
                <p class="lead">
                    Gerencie seus aluguéis, explore equipamentos e acompanhe seu histórico.
                </p>
            </div>
        </div>
    </div>
</div>


    <!-- Ações Rápidas -->
    <div class="row text-center mb-5">
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title text-success">📦 Meus Aluguéis</h5>
                    <p class="card-text">Veja, edite ou cancele seus pedidos ativos e anteriores.</p>
                    <a href="{{ route('alugueis.index') }}" class="btn btn-success">Gerenciar Aluguéis</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title text-success">🎈 Equipamentos</h5>
                    <p class="card-text">Explore todos os itens disponíveis para locação.</p>
                    <a href="{{ route('equipamentos.index') }}" class="btn btn-outline-success">Ver Equipamentos</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
    <div class="card shadow-sm border-0 h-100">
        <div class="card-body text-center">
            <h5 class="card-title text-success">💬 Ajuda</h5>
            <p class="card-text">Fale com a assistente virtual para tirar dúvidas e receber ajuda personalizada.</p>
            <a href="{{ route('chat.ajuda') }}" class="btn btn-outline-success">Abrir Chat</a>
        </div>
    </div>
</div>


    <!-- Estatísticas -->
    <div class="row mt-4">
        <div class="col-md-6 mb-3">
            <div class="card text-white bg-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">📊 Total de Aluguéis</h5>
                    <p class="display-6">2</p>
                    <small>Incluindo os ativos e históricos</small>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-3">
            <div class="card text-white bg-dark shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">💖 Equipamentos Favoritos</h5>
                    <p class="display-6">3</p>
                    <small>Baseado nos mais alugados por você</small>
                </div>
            </div>
        </div>
    </div>

<!-- Configurações -->
<div class="mt-5">
   <!-- Título de Configurações com destaque -->
<div class="d-flex justify-content-center mb-4">
    <div class="p-3 rounded-4 shadow text-white text-center" style="background: linear-gradient(135deg, #198754, #28a745); min-width: 320px;">
        <h4 class="mb-0">
            <i class="bi bi-gear-fill me-2"></i>Configurações da Conta
        </h4>
    </div>
</div>

<div class="card shadow-sm border-0 rounded-4">
    <div class="card-body p-0">
        <ul class="list-group list-group-flush overflow-hidden">

            <!-- Editar Perfil -->
            <li class="list-group-item d-flex align-items-center rounded-top-4">
                <i class="bi bi-person-circle me-2 text-secondary"></i> Editar Perfil
            </li>

            <!-- Alterar Senha -->
            <li class="list-group-item d-flex align-items-center">
                <i class="bi bi-lock me-2 text-secondary"></i>
                <a href="{{ route('password.change.form') }}" class="text-decoration-none text-dark">
                    Alterar Senha
                </a>
            </li>

            <!-- Sair -->
            <li class="list-group-item d-flex align-items-center">
                <i class="bi bi-box-arrow-right me-2 text-danger"></i>
                <form action="{{ route('logout') }}" method="GET" onsubmit="return confirm('Tem certeza que deseja sair?');">
                    @csrf
                    <button type="submit" class="btn btn-link text-decoration-none text-danger p-0">
                        Sair
                    </button>
                </form>
            </li>

            <!-- Excluir Conta -->
            <li class="list-group-item d-flex align-items-center rounded-bottom-4">
                <i class="bi bi-trash me-2 text-danger"></i>
                <form action="{{ route('account.delete') }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir sua conta? Esta ação é irreversível!');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-link text-decoration-none text-danger p-0">
                        Excluir Conta
                    </button>
                </form>
            </li>

        </ul>
    </div>
</div>

</div>

@endsection
