<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Concesionario</title>
    <style>
        /* General */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f9f9f9;
        }

        h1, h2 {
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        /* Tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #ddd;
        }

        /* Enlace */
        a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>
<h1>Concesionario</h1>
<form action="{{ route('concesionario') }}" method="GET">
    <input type="text" name="marca" placeholder="Buscar por modelo">
    <input type="submit" value="Filtrar">
</form>

<h2>Color y Marca de Coches</h2>
<table>
    <thead>
    <tr>
        <th>Marca</th>
        <th>Color</th>
    </tr>
    </thead>
    <tbody>
    @foreach($colorCoche as $coche)
        <tr>
            <td>{{$coche->marca}}</td>
            <td>{{$coche->color}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{route('crearCoche')}}">Crear coche</a>
</body>
</html>
