<x-app-layout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 via-blue-500 to-sky-400 dark:from-gray-800 dark:via-gray-700 dark:to-gray-600">
        <div class="py-24 px-6 mx-auto max-w-7xl text-center">
            <h1 class="mb-6 text-5xl font-extrabold leading-tight text-white">
                Bem-vindo ao Sistema de Gestão do Hotel
            </h1>
            <p class="mb-8 text-xl text-gray-100">
                Organize suas tarefas, acompanhe seu time e mantenha seu hotel funcionando como nunca!
            </p>
            <div class="flex justify-center gap-4">
                <a href="{{ route('dashboard') }}" class="px-6 py-3 text-lg font-medium text-white bg-indigo-700 rounded-lg hover:bg-indigo-800 focus:ring-4 focus:ring-indigo-300">
                    Acessar Painel
                </a>
                <a href="{{ route('register') }}" class="px-6 py-3 text-lg font-medium text-indigo-700 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-indigo-300">
                    Criar Conta
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-white dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="mb-12 text-4xl font-bold text-center text-gray-900 dark:text-white">
                Recursos do Sistema
            </h2>
            <div class="grid gap-10 md:grid-cols-3">
                <!-- Feature 1 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-md hover:shadow-xl transition">
                    <h3 class="text-2xl font-semibold mb-4 text-indigo-700 dark:text-indigo-400">
                        Gestão de Tarefas
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Organize tarefas em colunas como A Fazer, Fazendo e Feito, com movimentação intuitiva por drag & drop.
                    </p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-md hover:shadow-xl transition">
                    <h3 class="text-2xl font-semibold mb-4 text-indigo-700 dark:text-indigo-400">
                        Controle de Equipe
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Acompanhe o progresso de cada colaborador do hotel em tempo real, otimizando as rotinas operacionais.
                    </p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-gray-50 dark:bg-gray-800 p-8 rounded-2xl shadow-md hover:shadow-xl transition">
                    <h3 class="text-2xl font-semibold mb-4 text-indigo-700 dark:text-indigo-400">
                        Relatórios e Produtividade
                    </h3>
                    <p class="text-gray-600 dark:text-gray-300">
                        Gere relatórios sobre tarefas concluídas, produtividade da equipe e histórico de atividades.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
