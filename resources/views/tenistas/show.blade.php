@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Tenista</h1>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ $tenista->nombre }}" readonly>
    </div>
    <div class="form-group">
        <label for="edad">Edad</label>
        <input type="number" name="edad" class="form-control" value="{{ $tenista->edad }}" readonly>
    </div>
    <div class="form-group">
        <label for="nacionalidad">Nacionalidad</label>
        <input type="text" name="nacionalidad" class="form-control" value="{{ $tenista->nacionalidad }}" readonly>
    </div>
    <a href="{{ route('tenistas.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
