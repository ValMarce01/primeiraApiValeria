@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-green-50 flex items-center justify-center px-4 py-6">
    <div class="w-full max-w-2xl space-y-4">

        <!-- TÍTULO DO CHAT -->
        <div class="d-flex justify-content-center mb-2">
            <div class="p-4 rounded-4 shadow text-white text-center" style="background: linear-gradient(135deg, #198754, #28a745); min-width: 320px;">
                <h4 class="mb-0">🤖 Chat com Assistente Virtual</h4>
            </div>
        </div>

        <!-- SUBTÍTULO -->
        <div class="d-flex justify-content-center mb-4">
            <div class="p-3 rounded-4 shadow text-white text-center" style="background: linear-gradient(135deg, #198754, #28a745); min-width: 320px;">
                <h6 class="mb-0">
                    <i class="bi bi-robot me-2"></i>Tire dúvidas sobre aluguéis, equipamentos ou cadastros
                </h6>
            </div>
        </div>

       <!-- BLOCO DE CONTEÚDO -->
<div class="bg-white shadow-lg rounded-xl overflow-hidden border border-green-200">
    <div class="p-6 space-y-4">
        @if (isset($resposta))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded">
                {!! nl2br(e($resposta)) !!}
            </div>
        @else
            <div class="text-gray-600">
                Digite <strong>oi</strong> para iniciar a conversa.
            </div>
        @endif

        <!-- FORMULÁRIO DE MENSAGEM -->
<!-- Formulário principal para enviar mensagens -->
<form action="{{ route('chat.responder') }}" method="POST" class="flex gap-2">
    @csrf
    <input type="text" name="mensagem" placeholder="Digite sua mensagem..." required
        class="flex-1 px-4 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500">

    <button type="submit"
        style="background-color: #198754; color: white; padding: 8px 16px; border-radius: 6px; transition: background-color 0.3s;"
        onmouseover="this.style.backgroundColor='#157347'"
        onmouseout="this.style.backgroundColor='#198754'">
        Enviar
    </button>
</form>

<!-- Botão Voltar um pouco abaixo -->
<div class="mt-2">
    <form action="{{ route('chat.responder') }}" method="POST" class="inline">
        @csrf
        <input type="hidden" name="mensagem" value="voltar">
        <button type="submit"
            style="background-color: #198754; color: white; padding: 8px 16px; border-radius: 6px; transition: background-color 0.3s;"
            onmouseover="this.style.backgroundColor='#157347'"
            onmouseout="this.style.backgroundColor='#198754'">
            Voltar
        </button>
    </form>
</div>


    </div>
    <!-- RODAPÉ DO BLOCO -->
    <div class="bg-gray-100 text-center text-sm text-gray-600 p-3">
        AJ Festas © {{ date('Y') }} — Assistente automatizado para dúvidas
    </div>
    </div>

</div>
@endsection

