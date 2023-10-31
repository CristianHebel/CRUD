@extends('layouts.app')

@section('content')
    <h1 class="mb-1 mt-5">Crear Categoría</h1>

    <form method="POST" action="{{ route('categorias.store') }}">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Crear Categoría</button>
        <a href="{{ route('almacenes.index') }}" class="btn btn-primary ">Volver</a>
    </form>
</section>
@endsection
