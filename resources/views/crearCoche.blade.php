<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Base de datos</title>
</head>
<body>
<h1>Introduce un nuevo coche</h1>
<form method="post" action="{{ route('guardarCoche')}}">
    @csrf
    @method('PUT')
    <input type="text" name="marca" id="marca" placeholder="Marca del coche">
    <br>
    <input type="text" name="modelo" id="modelo" placeholder="Modelo del coche">
    <br>
    <input type="text" name="color" id="color" placeholder="Color del coche">
    <br>
    <input type="text" name="matricula" id="matricula" placeholder="Matricula del coche">
    <br>
    <input type="submit" value="Introducir nuevo coche">
</form>
</body>
</html>
