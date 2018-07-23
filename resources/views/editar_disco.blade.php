<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Música</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/discos_cantantes.css') }}">
</head>
<body>
    <div class="discos">
        <h1>EDITAR DISCO</h1>
        <div class="content">
        <form method="post" action="{{ action('DiscosController@update', $discos->id)}}">
            @csrf
                <span class="form-label">Nombre</span>
                <input type="text" name="nombre" value="{{$discos->nombre}}"><br>
                <span class="form-label">Genero</span>
                <input type="text" name="genero" value="{{$discos->genero}}">
                <br>
                <button type="submit" class="btn-submit" >Guardar</button>
        </form>
        </div>
    </div>
</body>


</html> 