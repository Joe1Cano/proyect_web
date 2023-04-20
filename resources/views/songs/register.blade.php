<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--css link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--css link Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Crear perfil</title>
    <link rel="icon" href="{{ asset('logos/LogoSinNombre.png') }}" type="image/x-icon">
</head>
<body>

<div class="contenedor">
        
        <div class="perfil">

            <div class="icons">
                <i class="bi bi-plus" style="font-size: 100px"></i>
                <i class="bi bi-person-fill" style="font-size: 100px"></i>
            </div>
            <div class="img">
                <img src="http://localhost/paw233/proyect_web/storage/app/public/user.webp" alt="" id="perfilimg">
            </div>
            <!--<img src="http://localhost:8080/paw233/proyect_web/storage/app/public/@auth{{Auth::user()->img}}@endauth" alt=""> <h1>Perfil de: @auth {{Auth::user()->name}} {{Auth::user()->l_name}}@endauth</h1> -->
            
            <div class="form">
                <form action="{{route('validar-registro')}}" method="post">
                @csrf

                    <div class="formcont">
                        <div class="cont" id="c1">
                            <div class="txt" id="t1">
                                <label for="">Nombre(s):</label>
                            </div>
                            <div class="txtbox" id="b1">
                                <input type="text" name="name" required>
                            </div>
                        </div> 
                        <br> 
                        <div class="cont" id="c2">
                            <div class="txt" id="t2">
                                <label for="">Apellido(s):</label>
                            </div>
                            <div class="txtbox" id="b2">
                                <input type="text" name="l_name" required>
                            </div>
                        </div>
                        <br>
                        <div class="cont" id="c3">
                            <div class="txt" id="t3">
                                <label for="">Correo:</label>
                            </div>
                            <div class="txtbox" id="b3">
                                <input type="email" name="mail" required>
                            </div>
                        </div>
                        <br>
                        <div class="cont" id="c4">
                            <div class="txt" id="t4">
                                <label for="">Contraseña:</label>
                            </div>
                            <div class="txtbox" id="b4">
                                <input type="text" name="password" required><br>
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
                                <a class="btnform" id="cancel" href="./login">
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