<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Música</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/discos_cantantes.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="discos">
        <h1>DISCOS</h1>
        <div class="content">
            <table style="width:100%">
                <tr>
                    <th>NOMBRE</th>
                    <th>GENERO</th>
                    <th>EDITAR</th>
                </tr>
                @foreach ($discos as $disco)
                <tr>
                    <td>{{ $disco->nombre }}</td>
                    <td>{{ $disco->genero }}</td>
                    <td>
                        <a href="/editar-disco/{!! $disco->id !!}" class="button editar_eliminar"><i class="material-icons">&#xe3c9;</i></button>                     
                        <a href="/delete/{!! $disco->id !!}" class="button editar_eliminar"><i class="material-icons">&#xe872;</i></button>
                    </td>
                </tr>
                @endforeach
            </table>    
            <button class="btn-add" type="button">Añadir disco</button>        
        </div>
    </div>
</body>

</html> 