<!doctype html>
<html lang="en">
  <head>
    <?php 
    include_once "titulo.php";
    include_once "stylo.php";
    ?>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/cover/">

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
      
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
/*if (isset($_GET["gnc"])){
echo "tiene gnc la puta madre";
}*/
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fechayhora = date("Y-m-d H:i:s");
$archivo="estacionados.txt";
$arrayPatentes=LeerArchivo($archivo);
/*patenteRepetida($arrayPatentes,$patente);*/
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


<!--cuenta atras -->
    <body>
<form name="redirect" id="redirect">
<center>

<form>
<font face="Arial"><input type="text" size="1" name="redirect2" /></font>
</form>
<font face="Arial">segundos.</font>
</center>
 
<!--script type="text/javascript">
 
var targetURL="TpObligatorioEstacionamiento/estacionar.php"
var countdownfrom=5
 
 
var currentsecond=document.redirect.redirect2.value=countdownfrom+1
function countredirect(){
    if (currentsecond!=1){
        currentsecond-=1
        document.redirect.redirect2.value=currentsecond
    }else{
        window.location=targetURL
        return
    }
    setTimeout("countredirect()",1000)
}
 
countredirect()
 
</script-->
</form>
</body>


<!-- aqui-->
    <div class="inner">
      <p><a href="#">Te Lo estaciono</a>, by <a href="index.php">@Socrams</a>.</p>
    </div>
  </footer>
</div>
 

 </body>
</html>