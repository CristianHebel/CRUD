@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center mt-4">
        <h1>Confirmar Eliminación</h1>
        <p>¿Estás seguro de que deseas eliminar este almacén?</p>
        <p><strong>Nombre:</strong> {{ $almacen->nombre }}</p>
    </div>
    <div class="text-center mt-3">
        <form method="POST" action="{{ route('almacenes.destroy', $almacen->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
            <a href="{{ URL::previous() }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>
@endsection
