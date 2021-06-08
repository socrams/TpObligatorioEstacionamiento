<?php
include_once 'funcion.php';
$patente = $_GET['patente'];
date_default_timezone_set("America/Argentina/Buenos_Aires"); 
$fechayhoraSalida = date("Y-m-d H:i:s");
$archivo="estacionados.txt";
$arrayPatentes=LeerArchivo($archivo);
//fasar a funcion
Comparar($patente,$arrayPatentes,$fechayhoraSalida,$archivo);
//echo " total $".$precio;
/*echo " fecha in ".$fechayhora;
echo " fecha out ".$fechayhoraSalida;
echo " precio ".$precio;*/
?>