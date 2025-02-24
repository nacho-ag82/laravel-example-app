@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Tenista</h1>
    <form action="{{ route('tenistas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" name="edad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nacionalidad">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
