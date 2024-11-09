<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::all();
        return view('compras.index', compact('compras'));
    }

    public function create()
    {
        return view('compras.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'proveedor' => 'required|string|max:255',
            'total' => 'required|numeric',
            'fecha' => 'required|date',
        ]);

        Compra::create($validatedData);
        return redirect()->route('compra.index')->with('success', 'Compra registrada exitosamente.');
    }

    public function show($id)
    {
        $compra = Compra::findOrFail($id);
        return view('compras.show', compact('compra'));
    }

    public function edit($id)
    {
        $compra = Compra::findOrFail($id);
        return view('compras.edit', compact('compra'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'proveedor' => 'required|string|max:255',
            'total' => 'required|numeric',
            'fecha' => 'required|date',
        ]);

        $compra = Compra::findOrFail($id);
        $compra->update($validatedData);
        return redirect()->route('compra.index')->with('success', 'Compra actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->delete();
        return redirect()->route('compra.index')->with('success', 'Compra eliminada exitosamente.');
    }
}