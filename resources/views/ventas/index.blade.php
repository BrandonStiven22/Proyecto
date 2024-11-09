@extends('layouts.plantilla')

@section('contenido')
<div class="container">
    <h1 class="titulo-tabla">Listado de Ventas</h1>
    
    <table class="tabla-ventas">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Total</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventas as $venta)
                <tr>
                    <td>{{ $venta->id }}</td>
                    <td>{{ $venta->cliente }}</td>
                    <td>{{ $venta->total }}</td>
                    <td>{{ $venta->fecha }}</td>
                    <td>
                        <a href="{{ route('venta.show', $venta->id) }}">
                            <img src="img/view.png" alt="Ver" title="Ver">
                        </a>
                        <a href="{{ route('venta.edit', $venta->id) }}">
                            <img src="img/edit.png" alt="Editar" title="Editar">
                        </a>
                        <form action="{{ route('venta.destroy', $venta->id) }}" method="POST" style="display:inline;" onsubmit="return confimarEliminacion()">
                            @csrf
                            @method('DELETE')
                            <input type="image" src="img/delete.png" alt="Eliminar" title="Eliminar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function confimarEliminacion() {
        return confirm('¿Seguro deseas eliminar?'); // Muestra el mensaje de confirmación
    }
</script>
@endsection