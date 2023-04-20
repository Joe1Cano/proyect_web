<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--css link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--css link Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Perfil</title>
    <link rel="icon" href="{{ asset('logos/LogoSinNombre.png') }}" type="image/x-icon">
</head>
<body>
    <div class="contenedor" style="height: 100%">
        <div class="sidenav" style="height: 100%">
            <img class="img-fluid" id="logo" src="{{ asset('logos/LogoSinNombre.png') }}" alt="" id="logo" onclick="location.href='./songs'">
            <a href="./favorites"><span class="bi bi-heart-fill"></span> Favoritas</a>
            <a href="./listas"><span class="bi bi-music-note-list"></span> Playlists</a>
            <a href="./perfil"><span class="bi bi-person-lines-fill"> Perfil</a>
            <a href="./config"><span class="bi bi-sliders2-vertical"></span> Configuracion</a>
            <a href="./logout"><span class="bi bi-plus-circle"></span> Logout</a>
        </div>

        
        <div class="perfil">
            <div class="img">
                <img src="http://localhost:80/paw233/proyect_web/storage/app/public/@auth{{Auth::user()->img}}@endauth" alt="" id="perfilimg">
            </div>
            <!--<img src="http://localhost:8080/paw233/proyect_web/storage/app/public/@auth{{Auth::user()->img}}@endauth" alt=""> <h1>Perfil de: @auth {{Auth::user()->name}} {{Auth::user()->l_name}}@endauth</h1> -->
            
            <div class="form">
                <form action="{{route('perfil.update',Auth::user()->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <input type="hidden" name="id" value="@auth{{Auth::user()->id}}@endauth">

                    <div class="imgicon">
                        <label for="img-input" id="imgbtn">
                            <i class="bi bi-person-square"></i>
                        </label>
                        <input type="file" id="img-input" name="img" required style="display: none;">
                    </div>

                    <div class="formcont">
                        <div class="cont" id="c1">
                            <div class="txt" id="t1">
                                <label for="">Nombre(s):</label>
                            </div>
                            <div class="txtbox" id="b1">
                                <input type="text" name="name" required value="@auth{{Auth::user()->name}}@endauth">
                            </div>
                        </div> 
                        <br> 
                        <div class="cont" id="c2">
                            <div class="txt" id="t2">
                                <label for="">Apellido(s):</label>
                            </div>
                            <div class="txtbox" id="b2">
                                <input type="text" name="l_name" required value="@auth{{Auth::user()->l_name}}@endauth">
                            </div>
                        </div>
                        <br>
                        <div class="cont" id="c3">
                            <div class="txt" id="t3">
                                <label for="">Correo:</label>
                            </div>
                            <div class="txtbox" id="b3">
                                <input type="email" name="mail" required value="@auth{{Auth::user()->email}}@endauth">
                            </div>
                        </div>
                        <br>
                        <div class="cont" id="c4">
                            <div class="txt" id="t4">
                                <label for="">Contraseña:</label>
                            </div>
                            <div class="txtbox" id="b4">
                                <input type="text" name="password"><br>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="btnform">
                            <div class="btnaccept" id="btnicon">
                                <button type="submit" id="confirm">
                                    <i class="bi bi-pencil-square"></i>
                                </button>
                            </div>
                            <div class="btncancel" id="btnicon">
                                <a class="btnform" id="cancel" href="{{route('songs.index')}}">
                                    <i class="bi bi-x-square"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>