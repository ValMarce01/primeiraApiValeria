<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat.ajuda');
    }

    public function responder(Request $request)
    {
        $mensagem = strtolower(trim($request->input('mensagem')));
        $resposta = $this->responderMensagem($mensagem);

        return view('chat.ajuda', compact('resposta'));
    }

    private function responderMensagem($mensagem)
    {
        switch ($mensagem) {
            case 'oi':
            case 'olá':
            case 'oie':
            case 'voltar':
                return "👋 Olá! Como posso te ajudar?
                    1️⃣ Ver equipamentos disponíveis
                    2️⃣ Ver meus aluguéis
                    3️⃣ Falar com um atendente
                    4️⃣ Como cadastrar aluguéis
                    5️⃣ Como cadastrar equipamentos
                    ✏️ Digite o número da opção ou voltar a qualquer momento.";

            case '1':
                return "🪑 Temos uma grande variedade de itens: mesas, cadeiras, castelos infláveis, iluminação, caixas de som e muito mais!
                        Use o menu lateral e clique em Equipamentos para visualizar e alugar.";

            case '2':
                return "📋 Para ver seus aluguéis:
                        1. Acesse o menu
                        2. Clique em Aluguéis
                        3. Veja os detalhes, edite ou exclua conforme necessário.";

            case '3':
                return "📞 Um atendente irá te responder em breve!
                        Você também pode entrar em contato pelo WhatsApp:(67) 99850-5378.";

            case '4':
                return "📝 Para cadastrar um aluguel:
                        - Vá até a aba Aluguéis
                        - Clique em Adicionar Aluguel
                        - Preencha as informações como equipamento, data de início e fim
                        - Clique em Salvar✅";

            case '5':
                return "📦 Para cadastrar um novo equipamento:
                        - Vá até o menu Equipamentos
                        - Clique em Adicionar Equipamento
                        - Informe nome,tamanho e valor da diária
                        - Clique em Salvar 🎉";

            default:
                return "❓ Desculpe, não entendi.Digite oi para começar ou voltar para retornar ao menu.";
        }
    }
}
