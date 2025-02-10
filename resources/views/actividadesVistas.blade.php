<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hola Mundo</title>
</head>
<body>
    <ul>
        @forelse($usuarios as $usuario)
            @if($loop->first)
                <li>Primer usuario: {{ $usuario }}</li>
            @elseif($loop->last)
                <li>Último usuario: {{ $usuario }}</li>
            @else
                <li>{{ $usuario }}</li>
            @endif
        @empty
            <li>No hay usuarios registrados</li>
        @endforelse
    
    </ul>

</body>
</html>