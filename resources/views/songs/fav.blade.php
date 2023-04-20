<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tabla.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--css link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--css link Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="{{ asset('logos/LogoSinNombre.png') }}" type="image/x-icon">

    <title>Favoritas</title>
</head>
<body>

  <div class="contenedor">
    @include('templates/navbar')

    <div class="tabla">
      <h1>Favoritas</h1>
      
      <table style="width:100%" border="1">
          <tr id="header""><th id="covertbl">Album</th><th>Cancion</th><th>Autor</th></tr>
          @foreach ($songs as $song)
          <tr onclick=<?php echo "showData('".$song->id."')"?> >
              <!--<td id="covertbl"><img  id="imgtbl" src=" <?php echo "http://localhost:80/proyecto_web/storage/app/public/".$song->foto ?>" ></td>-->
               <td id="covertbl"><img id="imgtbl" src=" <?php echo "http://localhost:80/paw233/proyect_web/storage/app/public/".$song->foto ?>" ></td> 
              <td><label id="nametbl">{{$song->nombre}}</label></td>
              <td>{{$song->autor}}</td>
          </tr>
          @endforeach
      </table>
    </div>
  </div>
</body>

<footer>

  @include('templates/player')
