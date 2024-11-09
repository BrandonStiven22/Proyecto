
@extends('layouts.plantilla') 

@section('contenido')
<div class="container">
    <h1 class="titulo-tabla">Lista de Proveedores</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="tabla-ventas">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
            <tr>
                <td>{{ $proveedor->id }}</td>
                <td>{{ $proveedor->nombre }}</td>
                <td>{{ $proveedor->direccion }}</td>
                <td>{{ $proveedor->telefono }}</td>
                <td>
                    <a href="{{ route('proveedor.edit', $proveedor->id) }}">
                        <img src="img/edit.png" alt="Editar" title="Editar">
                    </a>
                    <form action="{{ route('proveedor.destroy', $proveedor->id) }}" method="POST" style="display:inline;" onsubmit="return confimarEliminacion()">
                        @csrf
                        @method('DELETE')
                        <input type="image" src="img/delete.png" alt="Eliminar" title="Eliminar">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <a href="{{ route('proveedor.create') }}" class="btn btn-primary">Agregar Proveedor</a>
</div>

<script>
    function confimarEliminacion() {
        return confirm('¿Seguro deseas eliminar?'); // Muestra el mensaje de confirmación
    }
</script>
@endsection