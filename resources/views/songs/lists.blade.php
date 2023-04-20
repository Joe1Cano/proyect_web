<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/listas.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--css link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--css link Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="{{ asset('logos/LogoSinNombre.png') }}" type="image/x-icon">
    <title>Playlists</title>
    <style>
    </style>
</head>
<body>
    <div class="sidenav" style="height: 100%">
        <img class="img-fluid" id="logo" src="{{ asset('logos/LogoSinNombre.png') }}" alt="" id="logo" onclick="location.href='./songs'">
        <a href="./favorites"><span class="bi bi-heart-fill"></span> Favoritas</a>
        <a href="./listas"><span class="bi bi-music-note-list"></span> Playlists</a>
        <a href="./perfil"><span class="bi bi-person-lines-fill"> Perfil</a>
        <a href="./config"><span class="bi bi-sliders2-vertical"></span> Configuracion</a>
        <a href="./logout"><span class="bi bi-plus-circle"></span> Logout</a>
    </div>
    
    <div class="contenedor">
        <div class="listas">
            <h1>Playlists</h1>
            <div class='fila'>
                <?php 
                    $contador = 0;
                    foreach ($songs as $song) {
                    $lista = $song->name;
                    $ubicacion = "location.href='./".$lista."'";
                    $lista = $song->name;
                    $imagen = $song->img;
                    $joel =  "http://localhost:80/paw233/proyect_web/storage/app/public/".$imagen ;
                    $huber = "http://localhost:80/proyecto_web/storage/app/public/".$imagen ;
                    
                    if ($contador % 3 == 0 && $contador != 0) { //Si la el contador es 2 se cierra el row y se inicia otro 
                        echo "</div><div class='fila'>";
                    }
                    //Imprimimos nuestra carta
                    echo '<div class="column">';
                    echo '  <div class="carta" onclick="'. $ubicacion .'">';

                    echo '      <img id="imgcard" src="'.$joel.'">';
                    echo '      <p id="textcard"> '. $lista.' </p>';

                    echo '  </div>';
                    echo '</div>';

                    $contador++;
                    }
                ?>
            </div> <!-- Terminamos nuestro ciclo de cartas cerrando la ultima row -->
            
            <a href="{{route('createList')}}"><i class="bi bi-plus-square"></i></a>
        </div>
        
        
    </div>
        
    
</body>
</html>