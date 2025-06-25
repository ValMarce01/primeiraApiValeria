<?php

namespace App\Http\Controllers;

use App\Models\Quarto;
use Illuminate\Http\Request;

class QuartoController extends Controller
{
    public function index()
    {
        $quartos = Quarto::all();
        return view('quartos.index', compact('quartos'));
    }

    public function create()
    {
        return view('quartos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'capacidade' => 'required|integer',
        ]);

        Quarto::create($request->all());

        return redirect()->route('quartos.index')->with('success', 'Quarto criado com sucesso.');
    }

    public function edit($id)
    {
        $quarto = Quarto::findOrFail($id);
        return view('quartos.edit', compact('quarto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string',
            'descricao' => 'required|string',
            'capacidade' => 'required|integer',
        ]);

        $quarto = Quarto::findOrFail($id);
        $quarto->update($request->all());

        return redirect()->route('quartos.index')->with('success', 'Quarto atualizado com sucesso.');
    }

    public function destroy($id)
    {
        Quarto::destroy($id);
        return redirect()->route('quartos.index')->with('success', 'Quarto removido com sucesso.');
    }
}

