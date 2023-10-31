@extends('layouts.app')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('content')
<div class="container">
    <h1 class="text-center mb-4 mt-4">Listado</h1>

    <div class="row mb-3">
        <form method="GET" action="{{ route('productos.index') }}" class="col-md-8">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="almacen_filter">Filtrar por Almacén:</label>
                    <select name="almacen_filter" id="almacen_filter" class="form-control">
                        <option value="">Todos los Almacenes</option>
                        @foreach($almacenes as $almacen)
                            <option value="{{ $almacen->id }}">{{ $almacen->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="categoria_filter">Filtrar por Categoría:</label>
                    <select name="categoria_filter" id="categoria_filter" class="form-control">
                        <option value="">Todas las Categorías</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3 form-group mt-auto">
                    <button type="submit" class="btn btn-primary btn-block">Aplicar Filtros</button>
                </div>
            </div>
        </form>

        <div class="col-md-4 text-right mt-auto">
            <a href="{{ route('productos.create') }}" class="form-group btn btn-success"><i class="fas fa-plus"></i></a>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Observaciones</th>
                <th>Categoría</th>
                <th>Almacén</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ Str::limit($producto->observaciones, 50) }}</td>
                <td>{{ $producto->categoria->nombre }}</td>
                <td>{{ $producto->almacen->nombre }}</td>
                <td>
                    <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                    <a href="{{ route('productos.confirm', $producto->id) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
