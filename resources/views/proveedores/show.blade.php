@extends('layouts.plantilla')

@section('contenido')
<div class="container-show">
    <h2>Detalles del Proveedor</h2>
    <div class="proveedor-detail">
        <h3>Nombre: {{ $proveedor->nombre }}</h3>
        <p><strong>Dirección:</strong> {{ $proveedor->direccion }}</p>
        <p><strong>Teléfono:</strong> {{ $proveedor->telefono }}</p>
    </div>
    <div class="botones">
        <a href="{{ route('proveedor.edit', $proveedor->id) }}" class="btn">Editar Proveedor</a>
        <form action="{{ route('proveedor.destroy', $proveedor->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Eliminar Proveedor</button>
        </form>
        <a href="{{ route('proveedor.index') }}" class="btn">Volver a la lista</a>
    </div>
</div>
@endsection
