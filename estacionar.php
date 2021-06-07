<!doctype html>
<html lang="en">
  <head><?php  include_once"titulo.php";
  include_once"stylo.php";
  ?>
      <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h3 class="my-0 mr-md-auto font-weight-normal">Estacionar</h3>
    <!--<nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="#">Features</a>
      <a class="p-2 text-dark" href="#">Enterprise</a>
      <a class="p-2 text-dark" href="#">Support</a>
      <a class="p-2 text-dark" href="#">Pricing</a>
    </nav>-->
  <a class="btn btn-outline-primary" href="login.php">Salir</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Vehiculos</h1>
      <p class="lead">Ingrese a continuacion el numero de patente</p>

<!--recuadro para rellenar y botones debajo dentro del titulo-->
<form>
<h1><input name="patente" placeholder="AAA 111" required=""></h1>
<h4>
   <button class="button1" type="submit" onclick=this.form.action="ingreso.php"><h4>Ingreso</h4></button>    
   <button class="button2" type="submit" onclick=this.form.action="egreso.php"><h4>Salida</h4></button><!--class="btn btn-lg btn-primario"-->
</h4>
  </form>
</div>



<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 shadow-sm">
      <div style="background-color: lightblue" class="card-header">
        <h4 class="my-0 font-weight-normal" >Precio por Fraccion</h4>
      </div>

      <div class="card-body">
        <h1 class="card-title pricing-card-title">$70 <small class="text-muted">/15 min</small></h1>
          <ul class="list-unstyled mt-3 mb-4"></ul>
      </div>
    </div>

<div class="card mb-4 shadow-sm">
      <div style="background-color: lightblue" class="card-header">
        <h4 class="my-0 font-weight-normal" >Precio por Media Hora</h4>
      </div>
      
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$100 <small class="text-muted">/30 min</small></h1>
          <ul class="list-unstyled mt-3 mb-4"></ul>
      </div>
    </div>

    <div class="card mb-4 shadow-sm">
      <div style="background-color: lightblue" class="card-header">
        <h4 class="my-0 font-weight-normal" >Precio por hora</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">$150 <small class="text-muted">/hora</small></h1>
        <ul class="list-unstyled mt-3 mb-4"></ul>
      </div>
    </div>
  </div>
<div align="center">
<<<<<<< HEAD
  <?php include "tablaestacionados.php";
include "usarmetodos.php";
  ?> 
=======
  <?php include "tablaestacionados.php";include "usarmetodos.php";?> 
>>>>>>> 2d78a01d06e4ce8270d8ae54bcb6741193d5716d
</div>
</div>
<!-- tengo q reemplazar el footter por includeonce...
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">&copy; 2017-2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
-->



    
  </body>
</html>
