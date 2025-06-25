<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    body {
        background-image: url('{{ asset('imagens/tela.png') }}'); 
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .backdrop {
        background-color: rgba(255, 255, 255, 0.85); 
    }
</style>
</head>
<body class="bg-green-50 flex items-center justify-center h-screen">
    <div class="bg-white shadow-lg rounded-2xl p-8 max-w-md w-full border border-green-200">
        <h2 class="text-2xl font-bold text-green-700 text-center mb-6">🎈 Crie sua conta</h2>

        @if($errors->any())
            <div class="text-red-500 text-sm mb-4">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm text-gray-700">Nome</label>
                <input type="text" name="name" required value="{{ old('name') }}"
                    class="w-full px-4 py-2 border rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label class="block text-sm text-gray-700">E-mail</label>
                <input type="email" name="email" required value="{{ old('email') }}"
                    class="w-full px-4 py-2 border rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label class="block text-sm text-gray-700">Senha</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-2 border rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <div>
                <label class="block text-sm text-gray-700">Confirmar Senha</label>
                <input type="password" name="password_confirmation" required
                    class="w-full px-4 py-2 border rounded-md shadow-sm focus:ring-green-500 focus:border-green-500">
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-md hover:bg-green-700 transition">
                Cadastrar
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Já tem uma conta?
            <a href="{{ route('login') }}" class="text-green-600 hover:text-green-800 font-semibold">Entrar</a>
        </p>
    </div>
</body>
</html>
