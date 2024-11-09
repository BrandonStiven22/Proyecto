@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
<div class="card formulario">
    <h2>Editar Proveedor</h2>
    <form action="{{ route('proveedor.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{ $proveedor->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" value="{{ $proveedor->direccion }}">
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="text" id="telefono" name="telefono" value="{{ $proveedor->telefono }}">
        </div>
        <div class="form-group">
            <button type="submit">Actualizar Proveedor</button>
        </div>
    </form>
</div>
</div>
@endsection

