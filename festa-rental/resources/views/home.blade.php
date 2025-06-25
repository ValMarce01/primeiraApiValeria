@extends('layouts.app')

@section('title', 'Bem-vindo')

@section('content')
<div class="container text-center my-5">

<!-- Área com destaque para o título e texto (mais espaçoso) -->
<div class="row justify-content-center mb-5">
    <div class="col-md-10">
        <div class="card shadow-lg border-0 text-white p-4 py-5" style="background: linear-gradient(135deg, #198754, #28a745);">
            <h1 class="display-6 mb-3">
                <i class="bi bi-stars me-2"></i>
                Seja muito bem-vindo ao <strong>Sistema de Aluguel de Produtos para Festas!</strong>
            </h1>
            <p class="mb-0">
                Aqui você encontra tudo o que precisa para tornar seu evento inesquecível.<br>
                Escolha uma das opções abaixo e comece agora a organizar a sua festa perfeita!
            </p>
        </div>
    </div>
</div>


    <!-- Cards de Aluguel e Equipamentos -->
    <div class="row text-center">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title" style="color: #198754;">Aluguel de Produtos 🎉</h3>
                    <p class="card-text" style="color: #198754;">
                        Encontre uma variedade incrível de produtos para festas, desde mesas e cadeiras até iluminação, decoração e muito mais. Tudo o que você precisa para fazer seu evento inesquecível, com qualidade e praticidade!
                    </p>
                    <a href="{{ route('alugueis.index') }}" class="btn btn-success mt-3">Ver Opções de Aluguel</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title" style="color: #198754;">Equipamentos para Festas 🎈</h3>
                    <p class="card-text" style="color: #198754;">
                        Explore nossos equipamentos de alta qualidade, prontos para dar aquele toque especial na sua festa. Trabalhamos com som, iluminação, infláveis, brinquedos, estruturas e muito mais para garantir o sucesso do seu evento!
                    </p>
                    <a href="{{ route('equipamentos.index') }}" class="btn btn-success mt-3">Conhecer Equipamentos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Destaques de Equipamentos -->
    <div class="container-fluid bg-white py-5 mt-5 shadow-sm">
        <div class="container">
            <h2 class="text-center text-success mb-5">Destaques de Equipamentos</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">

                {{-- Card 1 --}}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <a href="{{ url('/equipamentos/1') }}">
                            <img src="{{ asset('imagens/cadeira.png') }}" class="card-img-top" alt="Cadeira Dourada">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-success">Cadeira Dourada Luxo</h5>
                            <p class="card-text">Estilo e conforto para festas sofisticadas. Acabamento dourado com estofado branco.</p>
                        </div>
                    </div>
                </div>

                {{-- Card 2 --}}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <a href="{{ url('/equipamentos/2') }}">
                            <img src="{{ asset('imagens/mesa.png') }}" class="card-img-top" alt="Mesa Clássica">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-success">Mesa Clássica</h5>
                            <p class="card-text">Mesa clássica para festas. Cores variadas.</p>
                        </div>
                    </div>
                </div>

                {{-- Card 3 --}}
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <a href="{{ url('/equipamentos/3') }}">
                            <img src="{{ asset('imagens/Castelo.png') }}" class="card-img-top" alt="Castelo Inflável">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-success">Castelo Inflável</h5>
                            <p class="card-text">Ideal para festas infantis. Dourado, seguro e super divertido!</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




</div>


@endsection
