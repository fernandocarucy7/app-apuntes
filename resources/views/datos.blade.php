<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos desde la base de Datos</title>
</head>
<body>
    <h1>Datos traidos desde la base de datos</h1>

    <p>
        @foreach ($datos as $dato)

            <h2>{{$dato->titulo}}</h2>

            <h4>Apuntes</h4>
            @foreach($dato->apuntes as $iten)

                {{$iten}}
                <br>
            @endforeach

            <h4>Referencias</h4>
            @foreach($dato->referencias as $iten)

                {{$iten}}
                <br>
            @endforeach

            <br>
        @endforeach
    </p>
</body>
</html>