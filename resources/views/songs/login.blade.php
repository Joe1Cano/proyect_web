<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="icon" href="{{ asset('logos/LogoSinNombre.png') }}" type="image/x-icon">
  </head>
  <body>
  @if(session('error'))
    <script>
        Swal.fire(
    'Inicio de Sesión!',
    "{{ session('error') }}",
    'error'
    )
    </script>
    @endif

    <div class="form">
      <div class="icon">
        <img class="img-fluid" id="logo" src="{{ asset('logos/Logo1.png') }}" alt="" id="logo" onclick="location.href='./songs'">
        <!--<i class="bi bi-door-open" style="font-size: 100px"></i>-->
      </div>
      <form action="./validar-login" method="post" >
        {{csrf_field()}}
          <label for="">Email address:</label>
          <!--<input type="text" name="name" required> -->
          <input type="email" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          <br>
          <label for="">Password:</label>
          <!--<input type="text" name="autor" required> -->
          <input type="password" name="password" id="password" placeholder="Password" required>
          <br>
          <div class="formbtn">
              <button class="btnform" id="confirm" type="submit" value="" href="./songs">
                  <i class="bi bi-door-open"></i>
              </button>
              <a class="btnform" id="add" href="./register">
                  <i class="bi bi-person-plus-fill"></i>
              </a>
          </div>
                
      </form>
    </div>
  </body>
</html>
