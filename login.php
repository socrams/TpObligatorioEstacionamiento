<!doctype html>
<html lang="en">
  <head>
    <?php
    include_once"titulo.php"; include_once"stylo.php";
    ?>  
    <!-- Bootstrap core CSS -->
<!--link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> 

    


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">  <!--background="fondo.jpg"--> 

<form action="hacerlogin.php" class="form-signin" method="post">
  <!--imagen de login--><img class="mb-4" src="auto.ico" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Ingrese Usuario</h1>
 
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="correo" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

  <label for="inputPassword" class="sr-only">Password</label>
  <input name="clave" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <form>
  <button class="btn btn-lg btn-primary btn-block" type="submit" onclick=on.this.form="estacionar.php">Ingresar</button>
  </form>
  <!--
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
-->
</form>
  </body>


</html>
