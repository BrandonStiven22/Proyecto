@extends('layouts.plantilla')

@section('contenido')
<section class="card-show">
    <div class="product-container">
        <!-- Imagen del producto -->
        <div class="product-image">
            <img src="{{ asset('img/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">
        </div>

        <!-- Información del producto -->
        <div class="product-details">
            <h2>{{ $producto->nombre }}</h2>
            <div class="product-info">
                <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
                <p><strong>Precio:</strong> ${{ number_format($producto->precio, 2) }}</p>
                <p><strong>Precio de venta:</strong> ${{ number_format($producto->precio_venta, 2) }}</p>
                <p><strong>Stock:</strong> {{ $producto->stock }}</p>
            </div>
        </div>
    </div>
</section>
@endsection