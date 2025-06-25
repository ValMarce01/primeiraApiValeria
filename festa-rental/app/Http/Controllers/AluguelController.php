<?php

namespace App\Http\Controllers;
use App\Models\Aluguel;
use App\Models\Equipamento;
use Illuminate\Http\Request;

class AluguelController extends Controller
{
    public function index()
    {
        $alugueis = Aluguel::with('equipamento')->get();
        return view('alugueis.index', compact('alugueis'));
    }

    public function create()
    {
        $equipamentos = Equipamento::all();
        return view('alugueis.create', compact('equipamentos'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'equipamento_id' => 'required|exists:equipamentos,id',
                'data_inicio' => 'required|date|date_format:Y-m-d',
                'data_fim' => 'required|date|date_format:Y-m-d|after_or_equal:data_inicio',
            ]);

            Aluguel::create([
                'equipamento_id' => $request->equipamento_id,
                'data_inicio' => $request->data_inicio,
                'data_fim' => $request->data_fim,
                'user_id' => auth()->id(), // Aqui salvamos o ID do usuário logado
            ]);
            return redirect()->route('alugueis.index')->with('success', 'Aluguel cadastrado com sucesso!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    public function show($id)
    {
        $aluguel = Aluguel::with('equipamento')->findOrFail($id);
        return view('alugueis.show', compact('aluguel'));
    }

    public function edit($id)
    {
        $aluguel = Aluguel::findOrFail($id);
        $equipamentos = Equipamento::all();
        return view('alugueis.edit', compact('aluguel', 'equipamentos'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'equipamento_id' => 'required|exists:equipamentos,id',
                'data_inicio' => 'required|date|date_format:Y-m-d',
                'data_fim' => 'required|date|date_format:Y-m-d|after_or_equal:data_inicio',
            ]);

            $aluguel = Aluguel::findOrFail($id);
            $aluguel->update($request->all());
            return redirect()->route('alugueis.index')->with('success', 'Aluguel atualizado com sucesso!');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
    }

    public function destroy($id)
    {
        Aluguel::destroy($id);
        return redirect()->route('alugueis.index')->with('success', 'Aluguel excluído com sucesso!');
    }
}


