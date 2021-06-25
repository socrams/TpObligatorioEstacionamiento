<?php 
/*var_dump($_GET);

echo "<br>";
//VOLCADO DE VARIABLE en screen VAR_DUMP var_dump($_POST);*/
if(isset($_POST['correo']))
{
	$mail=$_POST['correo'];	
}
else
{
	die();
}
$clave=$_POST['clave'];
$listadodeusuarios=array();

$archivo=fopen("usuario.txt", "r");

while(!feof($archivo))
{
	$renglon=fgets($archivo);
	$datosDeUnUsuario=explode("=>",$renglon);
	if (isset($datosDeUnUsuario[0]))//($datosDeUnUsuario[0]!=" ") 
	{
		$listadodeusuarios[]=$datosDeUnUsuario;
	}	
}
fclose($archivo);
$ingreso="No ingreso";

foreach ($listadodeusuarios as $datos) 
{
	if($datos[0]==$mail)
	{
		if($datos[1]==$clave)
		{
			header("Location: estacionar.php");
						$ingreso="ingreso";
			break;
		}
	}
}
setcookie("usario",$mail);

if ($ingreso=="No ingreso")
{
	echo "datos erroneos";
}
?>