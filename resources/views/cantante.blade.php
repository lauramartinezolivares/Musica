<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Música</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/discos_cantantes.css') }}">
</head>
<body>
    <div class="cantantes">
        <h1>CANTANTES</h1>
        <div class="content">
            <table style="width:100%">
                <tr>
                    <th>NOMBRE</th>
                    <th>GENERO</th>
                    <th>EDITAR</th>
                </tr>
                @foreach ($cantantes as $cantante)
                <tr>
                    <td>{{ $cantante->nombre }}</td>
                    <td>{{ $cantante->nombre }}</td>
                    <td>50</td>
                </tr>
                @endforeach
            </table>           
        </div>
    </div>
</body>

</html> 