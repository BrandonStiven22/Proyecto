@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
<div class="card formulario">
    <h2>Agregar Nuevo Proveedor</h2>
    <form action="{{ route('proveedor.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono">
        </div>
        <div class="form-group">
            <button type="submit">Agregar Proveedor</button>
        </div>
    </form>
</div>
</div>
@endsection
