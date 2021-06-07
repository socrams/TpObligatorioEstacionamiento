<?php
include_once 'funcion.php';
$patente = $_GET['patente'];
date_default_timezone_set("America/Argentina/Buenos_Aires"); 
$fechayhoraSalida = date("Y-m-d H:i:s");
$archivo="estacionados.txt";
$arrayPatentes=LeerArchivo($archivo);
//fasar a funcion

foreach($arrayPatentes as $datos)
{   
    if($datos[0] == $patente)
    {
		$fechayhora= $datos[1];
		$precio=cobro($patente,$fechayhora,$fechayhoraSalida);
   	}
}
Delete($archivo,$patente,$fechayhora);
echo " total $".$precio;
/*echo " fecha in ".$fechayhora;
echo " fecha out ".$fechayhoraSalida;
echo " precio ".$precio;*/
Registro_de_cobro($patente,$fechayhora,$fechayhoraSalida,$precio);

?>