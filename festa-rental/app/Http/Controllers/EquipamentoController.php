<?php

namespace App\Http\Controllers;  
use App\Models\Equipamento;
use Illuminate\Http\Request;

class EquipamentoController extends Controller
{
    public function index()
    {
        $equipamentos = Equipamento::all();
        return view('equipamentos.index', compact('equipamentos'));
    }
    
    public function show(Equipamento $equipamento)
    {
        return view('equipamentos.show', compact('equipamento'));
    }
    
    public function create()
    {
        return view('equipamentos.create');
    }
    
    public function store(Request $request)
    {
        Equipamento::create($request->all());
        return redirect()->route('equipamentos.index');
    }
    
    public function edit(Equipamento $equipamento)
    {
        return view('equipamentos.edit', compact('equipamento'));
    }
    
    public function update(Request $request, Equipamento $equipamento)
    {
        $equipamento->update($request->all());
        return redirect()->route('equipamentos.index');
    }
    
    public function destroy(Equipamento $equipamento)
    {
        $equipamento->delete();
        return redirect()->route('equipamentos.index');
    }
    
}
