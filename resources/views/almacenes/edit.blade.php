@extends('layouts.app')

@section('content')
    <h1 class="mb-1 mt-5">Editar Almacén</h1>

    <form method="POST" action="{{ route('almacenes.update', $almacen->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $almacen->nombre }}" required>
        </div>



        <button type="submit" class="btn btn-primary">Actualizar Almacén</button>
        <a href="{{ route('almacenes.index') }}" class="btn btn-primary ">Volver</a>
    </form>
</section>
@endsection
