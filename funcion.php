<?php  
function IngresarAuto($patente,$fechayhora)
{
	if (isset($_GET["gnc"]))
	{
		$gnc1="SI";
	}
	else
	{
		$gnc1="NO";
	}
	if (isset($_GET["tipo"]))
	{
		if ($_GET["tipo"] == "alta")
		{
			$gama=$_GET["tipo"];
		}
		else if ($_GET["tipo"] == "media") 
		{
		 $gama=$_GET["tipo"];
		}
		else if ($_GET["tipo"] == "baja") 
		{
			$gama=$_GET["tipo"];
		}
	}
	else{
	 $gama="No Ingresada";
	}

	$archivoEstacionados="estacionados.txt";
	$renglon=$patente."=>".$fechayhora."=>".$gnc1."=>".$gama."\n";
	$archivo1= fopen($archivoEstacionados, "a");

    fwrite($archivo1,$renglon);
    fclose($archivo1);
}

function LeerArchivo($NomArchivo)
{
	$matrizDeRetorno=array();
	$archivo=fopen($NomArchivo,"r"); 
	while (!feof($archivo))
	{
		$renglon=fgets($archivo);
		$registroActual=explode("=>", $renglon);
		if(isset($registroActual[1]))
		{
			$matrizDeRetorno[]=$registroActual;
		}
	}
	fclose($archivo);
	return $matrizDeRetorno;
}

function dateDifference($fechayhoraSalida, $fechayhora)
{
	/* diferencia de hora -_-
	$datetime1 = new DateTime('2009-10-11');
	$datetime2 = new DateTime('2009-10-13');
	$interval = $datetime1->diff($datetime2);
	"->"+ i minutos h horas d dias m meses
	*/
    $datetime1=new DateTime($fechayhoraSalida);
    $datetime2=new DateTime($fechayhora);
    $minutos= $datetime1->diff($datetime2);
    $minutos=($minutos->i)+($minutos->h*60)+($minutos->d*24*60);
    return $minutos;
}

function cobro($patente,$fechayhora,$fechayhoraSalida,$gama)
{

	$PrecioPorMinuto=10;
	$PrecioPorHora=150;
	$PrecioMediaHora=100;
	$PrecioCuartoHora=80;
	$minutos=dateDifference($fechayhoraSalida,$fechayhora);
	//$minutos= 85;
	echo "cantidad de minutos que estuvo estacionado ".$minutos;
	if ($minutos>60)	{
		$n=$minutos/60;
		$ParteEntera = floor($n);

		$FraccionDeLaHora = $n - $ParteEntera;
		$FraccionDeLaHora*=60;
		if ($FraccionDeLaHora<=45 && $FraccionDeLaHora>=30)
		{
			$precio=($ParteEntera*$PrecioPorHora)+$PrecioMediaHora;
		}
		elseif ($FraccionDeLaHora<30 && $FraccionDeLaHora>=15)
		{
			$precio=($ParteEntera*$PrecioPorHora)+$PrecioCuartoHora;
		}
	}
	else
	{
		if ($minutos>45)
		{
			$precio=$PrecioPorHora;
		}
		elseif ($minutos<46 && $minutos>=30)
		{
			$precio=$PrecioMediaHora;
		}
		else
		{
			$precio=$PrecioCuartoHora;
		}
	}
	var_dump($gama);
	switch($gama)
        {
            case 'alta':
                $precio = $precio*1.2;
               	echo "holaalta";
                break;
            case 'media':
                $precio = $precio*1.1;
                echo "holamedia";
                break;
            default:
                $precio;
                break;
        }
	/*if ($gama=="alta ")
	{				
		$precio=$precio+((20*$precio)/100);
		echo(" hola ".$precio."atla entro ".$gama);
		
   	}
   	else if (strcmp($precio,"media ") == 0) //($gama=="media ")
	{				
		$precio=$precio+(10*$precio/100);
		echo(" hola ".$precio."media entro ".$gama);
   	}
   	*/

	return $precio;
}

function Registro_de_cobro($patente,$fechayhora,$fechayhoraSalida,$cobro)
{
	$renglon=$patente."=>".$cobro."=>".$fechayhoraSalida."=>".$fechayhora;
	$cobrados=fopen("cobrs.txt", "a");
	fwrite($cobrados,$renglon);
	fclose($cobrados);
}

function Delete($archivo,$patente,$fechayhora,$gnc1,$gama)
{
	$renglon=$patente."=>".$fechayhora."=>".$gnc1."=>".$gama;
	$contents = file_get_contents($archivo);
	$contents = str_replace($renglon,'', $contents);
	file_put_contents($archivo, $contents);
}

function Comparar($patente,$arrayPatentes,$fechayhoraSalida,$archivo)
{
	foreach($arrayPatentes as $datos)
	{   
	    if($datos[0] == $patente)
	    {
			$fechayhora=$datos[1];
			$datos1=$datos[0];
			$gnc1=$datos[2];
			$gama=$datos[3];
<<<<<<< HEAD
			$precio=cobro($patente,$fechayhora,$fechayhoraSalida,$gama);
			//var_dump ($gama);
		   	Delete($archivo,$patente,$fechayhora,$gnc1,$gama);
		   	Registro_de_cobro($patente,$fechayhora,$fechayhoraSalida,$precio);
		}
		//var_dump($precio);
=======
			$precio=cobro($patente,$fechayhora,$fechayhoraSalida);
			var_dump ($gama);
			if ($gama=="alta")
			{				
				$precio=$precio+(20*$precio/100);
				
		   	}
		   	else if ($gama=="media")
			{				
				$precio=$precio+(10*$precio/100);
		   	}
		   	if ($gnc1=="SI"){
		   		$precio=$precio+50;
		   	}
		   	Delete($archivo,$patente,$fechayhora,$gnc1,$gama);
		   	Registro_de_cobro($patente,$fechayhora,$fechayhoraSalida,$precio);
		}
		var_dump($precio);
>>>>>>> c637da4cbe012984781e8053f4af69dccafa9bd6
	}
	if ($patente!=$datos1)
	{
		
		header("Location: errorpatenteingreso.php");
   	}
<<<<<<< HEAD
   	if ($gnc1=="SI")
   	{
   		$precio=$precio+50;
   	}
=======
>>>>>>> c637da4cbe012984781e8053f4af69dccafa9bd6
return $precio;
}


/*function patenteRepetida($arrayPatentes,$patente)
{
	foreach($arrayPatentes as $datos)
	{   
	    if($datos[0] == $patente);
	    {
	    echo " Patente ".$patente; 
		}
	}

}
*/

?>
