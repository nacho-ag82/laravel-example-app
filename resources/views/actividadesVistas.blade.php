<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hola Mundo</title>
</head>
<body>
    <ul>
    @php
    $nivel = 2; // Example level
@endphp

<h1>
    @switch($nivel)
        @case(1)
            Usuario Básico
            @break
        @case(2)
            Usuario Intermedio
            @break
        @case(3)
            Usuario Avanzado
            @break
        @default
            Nivel desconocido
    @endswitch
</h1>

<ul>
    @for ($i = 1; $i <= 5; $i++)
        <li>Número: {{ $i }}</li>
    @endfor
</ul>

@if($usuarios->isNotEmpty())
    <p>Hay usuarios registrados.</p>
@else
    <p>No hay usuarios registrados.</p>
@endif
    
    </ul>

</body>
</html>