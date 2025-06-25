<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Quarto;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Lista todas as reservas.
     */
    public function index()
    {
        $reservas = Reserva::with(['quarto', 'cliente'])->get();
        return view('reservas.index', compact('reservas'));
    }

    /**
     * Exibe o formulário de criação.
     */
    public function create()
    {
        $quartos = Quarto::all();
        $clientes = Cliente::all();
        return view('reservas.create', compact('quartos', 'clientes'));
    }

    /**
     * Salva uma nova reserva.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'quarto_id' => 'required|exists:quartos,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'status' => 'nullable|string'
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.index')->with('success', 'Reserva criada com sucesso.');
    }

    /**
     * Exibe o formulário de edição.
     */
    public function edit($id)
    {
        $reserva = Reserva::findOrFail($id);
        $quartos = Quarto::all();
        $clientes = Cliente::all();
        return view('reservas.edit', compact('reserva', 'quartos', 'clientes'));
    }

    /**
     * Atualiza a reserva no banco de dados.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'quarto_id' => 'required|exists:quartos,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'status' => 'nullable|string'
        ]);

        $reserva = Reserva::findOrFail($id);
        $reserva->update($request->all());

        return redirect()->route('reservas.index')->with('success', 'Reserva atualizada com sucesso.');
    }

    /**
     * Exclui uma reserva.
     */
    public function destroy($id)
    {
        Reserva::destroy($id);
        return redirect()->route('reservas.index')->with('success', 'Reserva removida com sucesso.');
    }
}
