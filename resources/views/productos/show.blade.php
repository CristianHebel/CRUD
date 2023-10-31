@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Producto</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $producto->nombre }}</h5>
            <p class="card-text">Precio: ${{ $producto->precio }}</p>
            <p class="card-text"><strong>Categoría:</strong> {{ $producto->categoria->nombre }}</p>
            <p class="card-text"><strong>Almacén:</strong> {{ $producto->almacen->nombre }}</p>
            <p class="card-text"><strong>Observaciones:</strong> {{ $producto->observaciones }}</p>
        </div>
    </div>
    @if(Str::contains(URL::previous(), 'almacenes'))
        <a href="{{ route('almacenes.index') }}" class="btn btn-primary ">Volver</a>
    @else
        <a href="{{ route('productos.index') }}" class="btn btn-primary ">Volver</a>
    @endif
</div>
@endsection
