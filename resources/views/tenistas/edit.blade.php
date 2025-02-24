@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Tenista</h1>
    <form action="{{ route('tenistas.update', $tenista->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $tenista->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" name="edad" class="form-control" value="{{ $tenista->edad }}" required>
        </div>
        <div class="form-group">
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control" value="{{ $tenista->nacionalidad }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
