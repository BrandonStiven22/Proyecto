@extends('layouts.plantilla')

@section('contenido')
<section class="card-show">
    <div class="purchase-container">
        <h2>Detalles de la Compra</h2>
        <p><strong>Proveedor:</strong> {{ $compra->proveedor->nombre }}</p>
        <p><strong>Fecha de Compra:</strong> {{ $compra->fecha_compra }}</p>
        <p><strong>Total:</strong> ${{ number_format($compra->total, 2) }}</p>

        <a href="{{ route('compra.index') }}" class="btn btn-primary">Regresar</a>
        <a href="{{ route('compra.edit', $compra->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('compra.destroy', $compra->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
</section>
@endsection