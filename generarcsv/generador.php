<?php


$Patente="ebb666";
$fechaIngreso= date("Y-m-d  h:i:sa");
$fechaSalida=date("Y-m-d h:i:sa");
$importe="100";
$contador=0;
$renglones="";
$usuario="anonimo";
while ($contador<6)
{
   $renglones .= $Patente.";".$fechaIngreso.";".$usuario .";".$fechaSalida."\n";

		$contador++;

}
//aqui le decimos al navegador que vamos a enviar a un archivo del tipo CSV
header("Content-Description: File Transfer");
header("Content-Type: application/force-download");
header("Content-Disposition: attachment; filename=archivo.csv");
echo $renglones;

?>