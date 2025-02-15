<!doctype html>
<html lang="en">
  <head><?php  include_once"titulo.php";
  include "estacionamiento.php";
  include_once"stylo.php";
  ?>
      <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  
  <h3 class="my-0 mr-md-auto font-weight-normal"><img src="auto.ico" alt="" width="70" height="50">Estacionar</h3>
    
  <a class="btn btn-outline-primary" href="login.php">Salir</a>
</div>

<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
  <h1 class="display-4">Vehiculos</h1>
      <p class="lead">Ingrese a continuacion el numero de patente</p>

<form>
<div style="float:right;">
  <input type="radio" name="tipo" value="alta">
  <label for="alta">   Gama Alta</label><br>
  <input type="radio" name="tipo" value="media">
  <label for="media">  Gama Media</label><br>
  <input type="radio" name="tipo" value="baja">
  <label for="baja">   Gama Baja</label>
</div>
<h2><input type="checkbox" name="gnc" ><label>Tiene GNC ?</label></input></h2>
<!--recuadro para rellenar y botones debajo dentro del titulo-->
<h1><input style="text-transform: uppercase" maxlength="7" name="patente" placeholder="AAA 111 / AA 111 AA" required=""></h1>
<h4>
   <button class="button1" type="submit" onclick=this.form.action="ingreso.php"><h4>Ingreso</h4></button>    
   <button class="button2" type="submit" onclick=this.form.action="egreso.php"><h4>Salida</h4></button><!--class="btn btn-lg btn-primario"-->
</h4>
  </form>
</div>
<div  style="float: left;">
 <!--stylo boton descargar y eliminar bootstrap3.4 (no lo encontre en el link de la nueva)-->
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

<form style="margin-left: 6px" method="POST" action="jpg.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <br><input type="submit" value="Subir Archivo"><br>
</form>
<br>
<?php
// Esto devolverá todos los archivos de esa carpeta
$archivos = scandir("img");
$num=0;

?>
<table border="1"><th></th><th> Nombre de Archivo </th> <th> Descargar </th> <th> Eliminar </th>
<?php
for ($i=2; $i<count($archivos); $i++)
{
  $num++;
?>
<!-- Visualización del nombre del archivo !-->
    
      <tr><th scope="row"><?php echo $num;?></th>
      <td><?php echo $archivos[$i]; ?></td>
      <td align="center"><a  title="Descargar Archivo" href="img/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>"- style="color: blue; font-size:18px;"> 
        <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span></a></td>

      <td align="center"><a title="Eliminar Archivo" href="eliminar.php?name=img/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> 
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
    </tr>
    
 <?php 
}

 ?>
</table>
</div>
<br>
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
<div style = "float: left;">

  <?php 
  estacionamiento::CrearTablaEstacionados();
  include "tablaestacionados.php";
  ?> 
  
</div>
<div style = "float: right;">

  <?php 
estacionamiento::CrearTablaCobrados();
  include "tablacobrados.php";
  ?>
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
