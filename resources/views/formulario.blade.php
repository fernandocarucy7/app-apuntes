<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Nota</title>
</head>
<body>
    <h1>Crear una nota</h1> 
    <form action="/crear" method="POST">
        @csrf
        <label>
            Tiulo:
            <input type="text" name="titulo">
        </label>
        <br>
        <br>
        <label>
            Apuntes:
           <textarea name="apuntes" cols="50" rows="10"></textarea>
        </label>
        <br>
        <br>
        <label>
            Referencias:
           <textarea name="referencias" cols="50" rows="10"></textarea>
        </label>
        <br>
        <br>
        <button type="submit">
            Crear Nota
        </button>
    </form>
</body>
</html>