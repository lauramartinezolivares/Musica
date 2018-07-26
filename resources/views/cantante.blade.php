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
    <div class="cantantes">
        <h1>CANTANTES</h1>
        <div class="content">
        @if ($message = Session::get('warning'))
                <div class="alert">
                    {{ $message }}
                </div>
            @endif
            <table style="width:100%">
                <tr>
                    <th>NOMBRE</th>
                    <th>TIPO DE VOZ</th>
                    <th>VER DISCOS</th>
                </tr>
                @foreach ($cantantes as $cantante)
                <tr>
                    <td>{{ $cantante->nombre }}</td>
                    <td>{{ $cantante->tipo_voz }}</td>
                    <td> 
                        <a href="/disco-por-cantante/{!! $cantante->id !!}" class="button editar_eliminar">
                        <i class="material-icons" style="font-size:36px">remove_red_eye</i>
                        </a>    
                        <a href="/editar-cantante/{!! $cantante->id !!}" class="button editar_eliminar">
                        <i class="material-icons">&#xe3c9;</i>
                        </a>   
                        <!--<a href="/delete-cantante/{!! $cantante->id !!}" class="button editar_eliminar">
                        <i class="material-icons">&#xe872;</i>
                        </a>-->
                    </td>
                </tr>
                @endforeach
            </table>           
        </div>
    </div>
</body>

</html> 