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
    <a href="/cantantes" class="button btn-home"><i class="fa fa-backward"></i></a>
    <div class="cantantes">
        @foreach ($cantante as $cantante_del_disco)
        <h1>Discos de {{ $cantante_del_disco }}</h1>
        @endforeach
        <div class="content">
            <table style="width:100%">
                @if (count ($discos) === 0)
                <a href="/añadir-disco" class="button btn-add"><i class="material-icons" style="font-size:36px">create_new_folder</i></a>  
                    <p class="error-no-discos"> No hay discos de este cantante</p>
                @else
                <tr>
                    <th>NOMBRE</th>
                    <th>GENERO</th>
                </tr>
              
                @foreach ($discos as $disco)
                <tr>
                    <td>{{ $disco->nombre }}</td>
                    <td>{{ $disco->genero }}</td>
                </tr>
                @endforeach
                @endif
            </table>           
        </div>
    </div>
</body>

</html> 