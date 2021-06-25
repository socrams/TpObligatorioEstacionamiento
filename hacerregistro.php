<?php 
/*var_dump($_GET);

echo "<br>";
//VOLCADO DE VARIABLE en screen VAR_DUMP var_dump($_POST);*/

$mail=$_POST['correo'];
$clave=$_POST['clave'];
$copiaclave=$_POST['copiaclave'];
//echo "su mail es ".$mail." su clave es ".$clave." copiaclave ".$copiaclave;
if ($clave==$copiaclave)
{
	date_default_timezone_set("America/Argentina/Buenos_Aires");
	$ahora=date("Y-m-d H:i:s");
	$renglon="\n".$mail."=>".$clave."=>".$ahora;
	$archivo=fopen("usuario.txt","a");
	fwrite($archivo,$renglon);
	fclose($archivo);
	header("Location: login.php");
}
else
{
	echo "Sus claves no coinciden";
}













 ?>