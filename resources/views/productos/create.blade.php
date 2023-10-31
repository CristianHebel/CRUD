@extends('layouts.app')

@section('content')
    <h1 class="mb-1 mt-5">Crear Producto</h1>

    <form method="POST" action="{{ route('productos.store') }}" id="create-product-form">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" {{-- required --}}>
        </div>

        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control" step="0.01" {{-- required --}}>
        </div>

        <div class="form-group">
            <label for="observaciones">Observaciones:</label>
            <textarea name="observaciones" id="observaciones" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="categoria_id">Categoría:</label>
            <select name="categoria_id" id="categoria_id" class="form-control" {{-- required --}}>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="almacen_id">Almacén:</label>
            <select name="almacen_id" id="almacen_id" class="form-control" {{-- required --}}>
                @foreach($almacenes as $almacen)
                    <option value="{{ $almacen->id }}">{{ $almacen->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Crear Producto</button>


        @if(Str::contains(URL::previous(), 'almacenes'))
            <a href="{{ route('almacenes.index') }}" class="btn btn-primary ">Volver</a>
        @else
            <a href="{{ route('productos.index') }}" class="btn btn-primary ">Volver</a>
        @endif

    </form>
</section>
@endsection
