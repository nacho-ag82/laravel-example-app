<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hola Mundo</title>
</head>
<body>
   Saludos, {{ $nombre }}
@foreach($usuarios as $usuario)
<li>Saludos, {{ $usuario }}.</li>
@endforeach
</body>
</html>