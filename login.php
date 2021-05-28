<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Yo te lo Estaciono Login</title>
    <link rel="shorcut icon" href="https://aux3.iconspalace.com/uploads/645019229296460368.png">
    <!-- Bootstrap core CSS -->
<!--link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">  <!--background="fondo.jpg"--> 

<form action="hacerlogin.php" class="form-signin" method="post">
  <!--imagen de login--><img class="mb-4" src="https://i.imgur.com/DRUiMyM.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Registrate</h1>
 
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="correo" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>
  <input name="clave" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Sing UP</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
</form>
  </body>


</html>
