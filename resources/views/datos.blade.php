<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }
        h1 {
            color: #007bff;
            margin-bottom: 20px;
            text-align: center;
        }
        h2 {
            color: #333;
            margin-bottom: 10px;
        }
        h4 {
            color: #555;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        p {
            margin: 0;
        }
        .item {
            background-color: #f9f9f9;
            border-left: 4px solid #007bff;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 4px;
        }
        .item:nth-child(even) {
            background-color: #e9ecef;
        }
        .container br {
            content: "";
            display: block;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Datos Traídos desde la Base de Datos</h1>
        @foreach ($datos as $dato)
            <h2>{{ $dato->titulo }}</h2>

            <h4>Apuntes</h4>
            @foreach($dato->apuntes as $iten)
                <div class="item">{{ $iten }}</div>
            @endforeach

            <h4>Referencias</h4>
            @foreach($dato->referencias as $iten)
                <div class="item">{{ $iten }}</div>
            @endforeach

            <br>
        @endforeach
    </div>
</body>
</html>
