<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index()
    {
        $ventas = Venta::with('user', 'producto')->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $usuarios = User::all();
        $productos = Producto::all();
        return view('ventas.create', compact('usuarios', 'productos'));
    }

    public function store(Request $request)
{
    $request->validate([
        'user_id' => 'required|exists:users,id',
        'producto_id' => 'required|exists:productos,id',
        'cantidad' => 'required|integer|min:1',
        'precio_total' => 'required|numeric|min:0',
    ]);

    Venta::create($request->all());

  
    return redirect()->route('venta.index')->with('success', 'Venta registrada exitosamente.');
}

    public function show(Venta $venta)
    {
        return view('ventas.show', compact('venta'));
    }

    public function edit(Venta $venta)
    {
        $usuarios = User::all();
        $productos = Producto::all();
        return view('ventas.edit', compact('venta', 'usuarios', 'productos'));
    }

    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'required|integer|min:1',
            'precio_total' => 'required|numeric|min:0',
        ]);

        $venta->update($request->all());

        return redirect()->route('venta.index')->with('success', 'Venta actualizada exitosamente.');
    }

    public function destroy(Venta $venta)
    {
        $venta->delete();
        return redirect()->route('venta.index')->with('success', 'Venta eliminada exitosamente.');
    }
}
