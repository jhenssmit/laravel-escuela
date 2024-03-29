@extends('layouts.app')

@section('content')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
        <div class="container-fluid">
          <a class="navbar-brand" href="{{'/home'}}">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('asignatura.index')}}">Asignatura</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('alumno.index')}}">Alumno</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('profesor.index')}}">Profesor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('inscripcion.index')}}" tabindex="-1" aria-disabled="true">Inscripción</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <h4>Hora en Tiempo Real:
      <div id="horario"></div></h4>
      <center>
        
        <h1>Bienvenidos</h1>   


        <img class="image" src="https://cdn-icons-png.flaticon.com/512/1916/1916027.png" alt="">
      </center>

</body>
<script>
  function mostrarHora() {
    // Obtener la hora actual
    var ahora = new Date();

    // Obtener horas, minutos y segundos
    var horas = ahora.getHours();
    var minutos = ahora.getMinutes();
    var segundos = ahora.getSeconds();

    // Agregar cero a la izquierda si es necesario
    if (horas < 10) horas = "0" + horas;
    if (minutos < 10) minutos = "0" + minutos;
    if (segundos < 10) segundos = "0" + segundos;

    // Mostrar la hora en el elemento con id "horario"
    document.getElementById("horario").innerHTML = horas + ":" + minutos + ":" + segundos;
  }

  // Ejecutar la función "mostrarHora" cada 1 segundo
  setInterval(mostrarHora, 1000);
</script>
</html>

@endsection
