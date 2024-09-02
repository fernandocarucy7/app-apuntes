<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Apuntes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .button-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .button {
            background-color: #007bff;
            color: white;
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistema de Apuntes</h1>
        <div class="button-container">
            <a href="/crear" class="button"><i class="fas fa-plus"></i> Crear Nota</a>
            <a href="/modificar" class="button"><i class="fas fa-edit"></i> Modificar Nota</a>
            <a href="/mostrar" class="button"><i class="fas fa-pen"></i>Mostrar Nota</a>
            <a href="#" class="button"><i class="fas fa-trash"></i> Eliminar Nota</a>
        </div>
    </div>
</body>
</html>
