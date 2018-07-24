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
    <a href="/discos" class="button btn-home"><i class="fa fa-backward"></i></a>
    <div class="discos">
        <h1>AÑADIR UN NUEVO DISCO</h1>
        <div class="content">
        <form method="post" action="{{ action('DiscosController@store')}}">
            @csrf
                <span class="form-label">Nombre</span>
                <input type="text" name="nombre" value="{{$discos->nombre}}"><br>
                <span class="form-label">Cantante</span>
                <input type="text" name="cantante_nombre" value="{{$discos->cantante_nombre}}"><br>
                <span class="form-label">Genero</span>
                <input type="text" name="genero" value="{{$discos->genero}}">
                <br>
                <button type="submit" class="btn-submit" >Guardar</button>
        </form>
        </div>
    </div>
</body>


</html> 