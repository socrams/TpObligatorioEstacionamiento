<?php 
/*var_dump($_GET);

echo "<br>";
//VOLCADO DE VARIABLE en screen VAR_DUMP var_dump($_POST);*/
if(isset($_POST['correo']))
{
	$mail=$_POST['correo'];	
}

$clave=$_POST['clave'];
$listadodeusuarios=array();

$archivo=fopen("usuario.txt", "r");

while(!feof($archivo))
{
	//echo "renglon: ".fgets($archivo."<br>");
	$renglon=fgets($archivo);
	$datosDeUnUsuario=explode("=>",$renglon);
	if (isset($datosDeUnUsuario[1]))//($datosDeUnUsuario[0]!=" ") 
	{
		$listadodeusuarios[]=$datosDeUnUsuario;
	}
	//var_dump($datosDeUnUsuario);
	/*if($datosDeUnUsuario[0]==$mail)
	{
		if ($datosDeUnUsuario[1]==$clave) 
		{
			echo "se ha logeado joer";
		}
	}*/	
}
fclose($archivo);
//var_dump($listadodeusuarios)
$ingreso="No ingreso";

foreach ($listadodeusuarios as $datos) 
{
	if($datos[0]==$mail)
	{
		if($datos[1]==$clave)
		{
			echo "bienve";
			$ingreso="ingreso";
			break;
		}
	}
}

if ($ingreso=="No ingreso")
{
	echo "datos erroneos";
}
?>