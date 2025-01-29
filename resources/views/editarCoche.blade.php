<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario editar coches</title>
</head>
<body>
@foreach($errors->all() as $error)
<span>{{ $error }}</span> <br>
@endforeach
<h1>Edición del coche {{$coche->marca}}</h1>
<form method="post" action="{{ route('actualizarCoche',$coche->id  )}}">
    @csrf
    @method('PUT')
    <input type="text" name="marca" id="marca" placeholder="Marca del coche" value="{{old('marca'), $coche->marca}}">
    <br>
    <input type="text" name="modelo" id="modelo" placeholder="Modelo del coche" value="{{old('modelo'),$coche->modelo}}">
    <br>
    <input type="text" name="color" id="color" placeholder="Color del coche" value="{{old('color'),$coche->color}}">
    <br>
    <input type="text" name="matricula" id="matricula" placeholder="Matricula del coche" value="{{old('matricula'),$coche->matricula}}">
    <br>
    <input type="submit" value="Actualizar coche">
</form>
</body>
</html>
