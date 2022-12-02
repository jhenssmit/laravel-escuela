<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar profesor</h1>
    <form action="{{route('profesor.update',$profesor)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="nombre" value="{{$profesor->nombre}}"> <br> <br>
        </label>
        <label>
            Apellidos:
            <input type="text" name="apellido" value="{{$profesor->apellido}}"> <br><br>
        </label>
        <label>
            Dirección:
            <input type="text" name="direccion" value="{{$profesor->direccion}}"> <br><br>
        </label>
        <label>
            Fecha de Nacimiento:
            <input type="text" name="fecha_nacimiento" value="{{$profesor->fecha_nacimiento}}"> <br><br>
        </label>
        <label>
            Nivel academico:
            <input type="text" name="nivel_academ" value="{{$profesor->nivel_academ}}"> <br><br>
        </label>
    <br>
    <button type="submit">Editar Profesor</button>
</form>
</body>
</html>