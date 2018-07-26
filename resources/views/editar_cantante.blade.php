<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Música</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/discos_cantantes.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <a href="/" class="button btn-home"><i class="fa fa-home"></i></a>
    <a href="/cantantes" class="button btn-home"><i class="fa fa-backward"></i></a>
    <div class="discos">
        <h1>EDITAR CANTANTE</h1>
        <div class="content">
        <form method="post" action="{{ action('CantanteController@update', $cantante->id)}}">
            @csrf
                <span class="form-label">Nombre</span>
                <input type="text" name="nombre" value="{{$cantante->nombre}}"><br>
                <span class="form-label">Tipo de voz</span>
                <input type="text" name="tipo_voz" value="{{$cantante->tipo_voz}}">
                <br>
                <button type="submit" class="btn-submit" >Guardar</button>
        </form>
        </div>
    </div>
</body>


</html> 