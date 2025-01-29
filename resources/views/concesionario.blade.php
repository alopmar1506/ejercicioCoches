<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concesionario</title>
</head>
<body>
<h1>Concesionario</h1>
<form action="{{ route('concesionario') }}" method="GET">
    <input type="text" name="marca" placeholder="Buscar por modelo">
    <input type="submit" value="Filtrar">
</form>
<ul>
    @foreach($coches as $coche)
        <li><a href="{{ route('mostrarCoche', $coche->id) }}">{{$coche->marca }}</a> - {{$coche->matricula }}</li>
        <a href="{{route('editarCoche',$coche->id)}}">Editar coche</a><br>
    @endforeach
</ul>

<a href="{{route('crearCoche')}}">Crear coche</a>
</body>
</html>
