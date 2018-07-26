<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Música</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/discos_cantantes.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <a href="/" class="button btn-home"><i class="fa fa-home"></i></a>
    <div class="discos">
        <h1>DISCOS</h1>
        <a href="/añadir-disco" class="button btn-add"><i class="material-icons" style="font-size:36px">create_new_folder</i></a>  
        <br>   
        <br>
        <div class="content">
            <table style="width:100%">
                <tr>
                    <th>NOMBRE</th>
                    <th>GENERO</th>
                    <th>EDITAR O ELIMINAR</th>
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
        </div>
    </div>
</body>

</html> 