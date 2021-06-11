<!doctype html>
<html lang="en">
  <head>
    <?php include_once "titulo.php";?>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
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
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">Te Lo Estaciono</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="\TpObligatorioEstacionamiento\login.php">Ingresar</a>
        <a class="nav-link" href="index.php">Salir</a>
        <!--a class="nav-link" href="#"></a-->
      </nav>
    </div>
  </header>

<?php 
include_once 'funcion.php';
$patente=$_GET["patente"];
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fechayhora = date("Y-m-d H:i:s");
$archivo="estacionados.txt";
IngresarAuto($patente, $fechayhora);

?>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">Correcto</h1>
    <p class="lead"><?php echo "usted ingreso la patente ".strtoupper($patente).", Hora ".$fechayhora; ?></p>
    <p class="lead">
      <a href="estacionar.php" class="btn btn-lg btn-secondary">Volver</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p><a href="#">Te Lo estaciono</a>, by <a href="index.php">@Socrams</a>.</p>
    </div>
  </footer>
</div>
 

 </body>
</html>