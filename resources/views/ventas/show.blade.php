@extends('layouts.plantilla')

@section('contenido')
    <h1>Detalles de la Venta</h1>

    <p><strong>ID:</strong> {{ $venta->id }}</p>
    <p><strong>Cliente:</strong> {{ $venta->user->name }}</p>
    <p><strong>Producto:</strong> {{ $venta->producto->nombre }}</p>
    <p><strong>Cantidad:</strong> {{ $venta->cantidad }}</p>
    <p><strong>Precio Total:</strong> {{ $venta->precio_total }}</p>
@endsection
