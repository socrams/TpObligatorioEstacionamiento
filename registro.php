<!doctype html>
<html lang="en">
  <head>
<head>
  <?php  
  include_once"titulo.php";
  include_once"stylo.php";
  ?>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">
    <!-- Bootstrap core CSS -->
<!--link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">  <!--background="fondo.jpg"--> 
    
<form action="hacerregistro.php" class="form-signin" method="post">
  <!--imagen de login--><img class="mb-4" src="https://i.imgur.com/DRUiMyM.png" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Registrate</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input name="correo" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
 
  <label for="inputPassword" class="sr-only">Password</label>
  <input name="clave" type="password" id="inputPassword" class="form-control" placeholder="Password" required>

  <label for="inputPassword" class="sr-only">Copia de Password</label>
  <input name="copiaclave" type="password" id="inputPassword" class="form-control" placeholder="Copia Password" required>

  <button class="btn btn-lg btn-primary btn-block" type="submit">Registrarme</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
</form>
  </body>


</html>
