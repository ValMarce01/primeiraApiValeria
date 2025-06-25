<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Sistema de Aluguel de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-image: url('{{ asset('imagens/fundo.png') }}');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }
        .btn-green { background-color: #28a745; color: white; }
        .btn-green:hover { background-color: #218838; }
        .navbar { background-color: #198754; }
        .navbar-brand, .navbar-nav .nav-link { color: white !important; }

        .custom-user-menu {
            width: 240px;
            border-radius: 12px;
            background-color: #ffffff;
            padding: 0;
            overflow: hidden;
        }

        .custom-user-menu .dropdown-item {
            padding: 10px 20px;
            font-weight: 500;
            border-radius: 0;
            transition: background 0.2s;
        }

        .custom-user-menu .dropdown-item:hover {
            background-color: #e9f5ee;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Sistema de Equipamentos e Aluguel de Festas</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                            <img src="https://cdn-icons-png.flaticon.com/512/1144/1144760.png" width="28" height="28" class="rounded-circle me-2" style="filter: brightness(0) invert(1);"/>
                            @auth {{ Auth::user()->name }} @else Conta @endauth
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end custom-user-menu shadow-sm border-0">
                            <li class="px-3 py-2 text-center">
                                <img src="https://cdn-icons-png.flaticon.com/512/1144/1144760.png" class="rounded-circle mb-2" width="60" height="60">
                                <strong class="d-block">@auth {{ Auth::user()->name }} @else Conta @endauth</strong>
                                <small class="text-muted">Usuário do sistema</small>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            @auth
                                <li><a class="dropdown-item text-success" href="{{ route('dashboard') }}"><i class="bi bi-speedometer2 me-2"></i>Painel</a></li>
                                <li><a class="dropdown-item text-danger" href="{{ route('logout') }}"><i class="bi bi-box-arrow-right me-2"></i>Sair</a></li>
                            @else
                                <li><a class="dropdown-item text-success" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right me-2"></i>Entrar</a></li>
                                <li><a class="dropdown-item text-success" href="{{ route('register') }}"><i class="bi bi-person-plus me-2"></i>Cadastrar</a></li>
                            @endauth
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Conteúdo da Página --}}
    <main class="container my-5 flex-grow-1">
        @yield('content')
    </main>

    {{-- Rodapé --}}
    <footer class="mt-auto" style="background-color: #ffffff; border-top: 1px solid #ddd;">
        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; padding: 40px 20px;">

            <!-- Institucional -->
            <div>
                <h4 style="font-weight: bold; color: #198754;"><i class="bi bi-info-circle-fill me-2"></i>Institucional</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li><a href="#" style="text-decoration: none; color: #444;"><i class="bi bi-chevron-right me-1"></i>Sobre Nós</a></li>
                    <li><a href="#" style="text-decoration: none; color: #444;"><i class="bi bi-shield-lock me-1"></i>Política de Privacidade</a></li>
                    <li><a href="#" style="text-decoration: none; color: #444;"><i class="bi bi-file-earmark-text me-1"></i>Termos de Uso</a></li>
                </ul>
            </div>

            <!-- Fale Conosco -->
            <div>
                <h4 style="font-weight: bold; color: #198754;"><i class="bi bi-envelope-fill me-2"></i>Fale Conosco</h4>
                <p style="margin: 6px 0;"><i class="bi bi-envelope-at me-1"></i>contato@ajfestas.com.br</p>
                <p style="margin: 6px 0;"><i class="bi bi-whatsapp me-1"></i>(67) 99850-5378</p>
                <p style="margin: 6px 0;"><i class="bi bi-clock me-1"></i>Seg a Sex, 9h às 18h</p>
            </div>

            <!-- Navegação -->
            <div>
                <h4 style="font-weight: bold; color: #198754;"><i class="bi bi-list me-2"></i>Navegação</h4>
                <ul style="list-style: none; padding: 0; line-height: 1.8;">
                    <li><a href="/" style="text-decoration: none; color: #444;"><i class="bi bi-house-door me-1"></i>Início</a></li>
                    <li><a href="/equipamentos" style="text-decoration: none; color: #444;"><i class="bi bi-box-seam me-1"></i>Equipamentos</a></li>
                    <li><a href="/alugueis" style="text-decoration: none; color: #444;"><i class="bi bi-calendar2-week me-1"></i>Aluguéis</a></li>
                    <li><a href="/dashboard" style="text-decoration: none; color: #444;"><i class="bi bi-person-circle me-1"></i>Painel do Usuário</a></li>
                </ul>
            </div>

            <!-- Redes e Pagamento -->
            <div>
                <h4 style="font-weight: bold; color: #198754;"><i class="bi bi-share-fill me-2"></i>Siga-nos</h4>
                <div style="font-size: 20px; margin-bottom: 12px;">
                    <a href="#" style="margin-right: 10px; color: #198754;"><i class="bi bi-instagram"></i></a>
                    <a href="#" style="margin-right: 10px; color: #198754;"><i class="bi bi-facebook"></i></a>
                    <a href="#" style="color: #198754;"><i class="bi bi-youtube"></i></a>
                </div>
                <h4 style="font-weight: bold; color: #198754;"><i class="bi bi-credit-card me-2"></i>Formas de Pagamento</h4>
                <img src="{{ asset('imagens/pagamentos.png') }}" alt="Formas de pagamento" style="margin-top: 10px; width: 220px; height: auto;">
            </div>
        </div>

        <div style="background-color: #198754; color: white; text-align: center; padding: 10px 0;">
            © 2025 <strong>AJ Festas</strong> — Todos os direitos reservados.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
