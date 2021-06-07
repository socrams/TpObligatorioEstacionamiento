<?php 
include_once 'funcion.php';//llama a funcion.php
$patente=$_GET["patente"];
date_default_timezone_set("America/Argentina/Buenos_Aires");//hora de arg.
$fechayhora = date("Y-m-d H:i:s");//hora dl momento
IngresarAuto($patente, $fechayhora);
// crea el $archivoEstacionados estacionados.txt

 ?>