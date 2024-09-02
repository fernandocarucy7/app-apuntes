<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modificar Nota</title>
</head>
<body>
    <h1>Modificar Nota</h1> 
    <form action="/crear" method="POST">
        @csrf
        @method('PUT')
        <label>
            Tiulo:
            <input type="text" name="titulo" value={{$nota->titulo}}>
        </label>
        <br>
        <br>
        <label>
            Apuntes:
           <textarea name="apuntes" cols="50" rows="10">
            {{$nota->apuntes[0]}}
            {{$nota->apuntes[1]}}
            {{$nota->apuntes[2]}}
        </textarea>
        </label>
        <br>
        <br>
        <label>
            Referencias:
           <textarea name="referencias" cols="50" rows="10">
            {{$nota->referencias[0]}}
            {{$nota->referencias[1]}}
            {{$nota->referencias[2]}}
           </textarea>
        </label>
        <br>
        <br>
        <button type="submit">
            Crear Nota
        </button>
    </form>
</body>
</html>