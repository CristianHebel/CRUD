@extends('layouts.app')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('content')
<div class="container">
    <h1 class="text-center mb-5 mt-5">Gestión</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="row mb-2">
                <h2 class="col-md-8 mb-3">Almacenes</h2>
                <div class="col-md-4 text-right">
                    <a href="{{ route('almacenes.create') }}" class="btn btn-success mt-2"><i class="fas fa-plus"></i> </a>
                </div>
            </div>

            <ul class="list-group">
                @foreach($almacenes as $almacen)
                <li class="list-group-item">
                    {{ $almacen->nombre }}
                    <div class="float-right">
                        <a href="{{ route('almacenes.edit', $almacen->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('almacenes.confirm', $almacen->id) }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="col-md-4">
            <div class="row mb-2">
                <h2 class="col-md-8 mb-3">Categorías</h2>
                <div class="col-md-4 text-right">
                    <a href="{{ route('categorias.create') }}" class="btn btn-success mt-2"><i class="fas fa-plus"></i></a>                
                </div>
            </div>
            <ul class="list-group">
                @foreach($categorias as $categoria)
                <li class="list-group-item">
                    {{ $categoria->nombre }}
                    <div class="float-right">
                        <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('categorias.confirm', $categoria->id) }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>

        </div>

        <div class="col-md-4">
            <div class="row mb-2">
                <h2 class="col-md-8 mb-3">Productos</h2>
                <div class="col-md-4 text-right">
                    <a href="{{ route('productos.create') }}" class="btn btn-success mt-2 "><i class="fas fa-plus"></i> </a>
                </div>
            </div>
            

            <ul class="list-group">
                @foreach($productos as $producto)
                <li class="list-group-item">
                    {{ $producto->nombre }}
                    <div class="float-right">
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('productos.confirm', $producto->id) }}" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </li>
                @endforeach
            </ul>
            
        </div>
    </div>
    <a href="{{ route('productos.index') }}" class="btn btn-primary mt-3">Volver al listado</a>
</div>
@endsection
