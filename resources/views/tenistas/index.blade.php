@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Tenistas</h1>
    <a href="{{ route('tenistas.create') }}" class="btn btn-primary">Crear Tenista</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Nacionalidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tenistas as $tenista)
            <tr>
                <td>{{ $tenista->nombre }}</td>
                <td>{{ $tenista->edad }}</td>
                <td>{{ $tenista->nacionalidad }}</td>
                <td>
                    <a href="{{ route('tenistas.show', $tenista->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('tenistas.edit', $tenista->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('tenistas.destroy', $tenista->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
