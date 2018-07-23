<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Música</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/inicio.css') }}">
</head>
<body>

    <div class="center">
        <div class="center">
            <h1>MÚSICA</h1>
            <a href="{{ route('discos') }}" class="button">Discos</a>
            <a href="{{ route('cantantes') }}" class="button">Cantantes</a>
        </div>
    </div>

</body>

</html> 