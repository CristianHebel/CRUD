@extends('layouts.app')

@section('content')
    <h1 class="mb-1 mt-5">Editar Categoría</h1>

    <form method="POST" action="{{ route('categorias.update', $categoria->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $categoria->nombre }}" required>
        </div>


        <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
        <a href="{{ route('almacenes.index') }}" class="btn btn-primary ">Volver</a>
    </form>
</section>
@endsection
